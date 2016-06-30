<?php

namespace RiskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RiskBundle\Entity\Game;
use RiskBundle\Entity\Player;
use RiskBundle\Entity\Box;
use RiskBundle\Entity\Slot;
use RiskBundle\Model\Mode;
use RiskBundle\Model\Grille;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use \Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller {

    public function accueilAction() {
        return $this->render('RiskBundle::Accueil.html.twig');
    }

    public function reglesAction() {
        return $this->render('RiskBundle::Regles.html.twig');
    }

    public function jeuAction(Request $request) {
        $session = $request->getSession();
        $session->set('idGame', null);
        return $this->render('RiskBundle::Parametres.html.twig');
    }

    public function lancementAction(Request $request) {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        if ($session->get('idGame') == null) {

            $nbPlayers = $request->get('nbPlayers');
            $width = $request->get('width');
            $mode = $request->get('mode');

            //Création de la partie
            $game = new Game();
            $game->setNbPlayers($nbPlayers);
            $game->setHeight($width);
            $game->setWidth($width);
            $game->setMode($mode);

            //Création des joueurs
            $players = $this->initialisePlayers($request, $game);
            $player0 = $players[0];
            $player1 = $players[1];
            $player2 = $players[2];

            //Ajout des joueurs à la partie
            $game->addPlayer($player0);
            $game->addPlayer($player1);
            $game->addPlayer($player2);


            //Création des cases
            $nbBoxes = $game->getHeight() * $game->getWidth() + 1;
            for ($index = 1; $index < $nbBoxes; $index++) {
                $box = new Box();
                $player0->addBox($box);
                //Création des slots de chaque case
                for ($index2 = 1; $index2 < 10; $index2++) {
                    if ($index2 == 1) {
                        $slot = new Slot();
                        $slot->setFree(false);
                        $slot->setPosition($index2);
                        $box->addSlot($slot);
                    } else {
                        $slot = new Slot();
                        $slot->setFree(true);
                        $slot->setPosition($index2);
                        $box->addSlot($slot);
                    }
                }
            }

            //Sauvegarde du jeu
            $em->persist($game);
            $em->flush();

            //Attribution d'une case aléatoire à chaque joueur
            $repository = $em->getRepository('RiskBundle:Box');
            $cases = $player0->getBoxes();
            $index1 = rand(1, count($cases));
            $boxPlayer1 = $repository->findOneById($cases[$index1]->getId());
            do {
                $index2 = rand(1, count($cases));
            } while ($index2 == $index1);
            $boxPlayer2 = $repository->findOneById($cases[$index2]->getId());
            $boxPlayer1->setPlayer($player1);
            $boxPlayer2->setPlayer($player2);
            $em->persist($boxPlayer1);
            $em->persist($boxPlayer2);
            $em->flush();

            //Attribution de 3 soldats à chaque joueur dans cette case
            $slotsPlayer1 = $boxPlayer1->getSlots();
            $count = 1;
            foreach ($slotsPlayer1 as $slot) {
                if ($count < 4) {
                    $slot->setFree(false);
                } else {
                    break;
                }
                $count++;
            }
            $slotsPlayer2 = $boxPlayer2->getSlots();
            $count = 1;
            foreach ($slotsPlayer2 as $slot) {
                if ($count < 5) {
                    $slot->setFree(false);
                } else {
                    break;
                }
                $count++;
            }

            $em->persist($boxPlayer1);
            $em->persist($boxPlayer2);
            $em->flush();

            $repository = $em->getRepository('RiskBundle:Game');
            $boxes = $repository->getBoxes($game->getId());

            $session->set('idGame', $game->getId());
            $session->set('modeValue', "selection");
            $session->set('modePlayer', $player1->getId());
            $mode = new Mode();
            $mode->setPlayer($player1);
            $mode->setValue("selection");
        } else {
            $repository = $em->getRepository('RiskBundle:Game');
            $game = $repository->findOneById($session->get('idGame'));
            $players = $game->getPlayers();
            $player0 = $players[0];
            $player1 = $players[1];
            $player2 = $players[2];

            $boxes = $repository->getBoxes($game->getId());

            $mode = new Mode();

            $modeValue = $session->get('modeValue');
            $modePlayer = $session->get('modePlayer');
            if ($modePlayer == $player1->getId() && $modeValue == "selection") {
                $mode->setPlayer($player2);
                $mode->setValue("selection");
            }
            if ($modePlayer == $player2->getId() && $modeValue == "selection") {
                $mode->setPlayer($player1);
                $mode->setValue("ajoutSoldats");
            }
            if ($modePlayer == $player1->getId() && $modeValue == "ajoutSoldats") {
                $mode->setPlayer($player2);
                $mode->setValue("ajoutSoldats");
            }
            if ($modePlayer == $player2->getId() && $modeValue == "ajoutSoldats") {
                $mode->setPlayer($player1);
                $mode->setValue("selection");
            }
            $session->set('modeValue', $mode->getValue());
            $session->set('modePlayer', $mode->getPlayer()->getId());
        }

        $grille = new Grille();
        $html = $grille->getGrille($game->getWidth(), $game->getHeight(), $boxes, $player0, $player1, $player2);

        return $this->render('RiskBundle::Jeu.html.twig', array('html' => $html, 'player0' => $player0, 'player1' => $player1, 'player2' => $player2, 'boxes' => $boxes, 'mode' => $mode));
    }

    public function initialisePlayers($request, $game) {

        $em = $this->getDoctrine()->getManager();
        $players = array();

        $nbCasesNeutres = $game->getHeight() * $game->getWidth() - $request->get('nbPlayers');
        $player0 = new Player();
        $player0->setName('neutre');
        $player0->setNbBoxes($nbCasesNeutres);
        $player0->setNbSoldiers($nbCasesNeutres);
        $player0->setColor('white');
        $player0->setSymbol('croixNoire.png');
        array_push($players, $player0);

        $namePlayer1 = $request->get('player1');
        if ($namePlayer1 != null) {
            $player1 = new Player();
            $player1->setName($namePlayer1);
            $player1->setNbBoxes(1);
            $player1->setNbSoldiers(3);
            $symbol = $request->get('symbolPlayer1');
            $player1->setSymbol($symbol);
            $player1->setColor($this->initialiseColor($symbol));
            array_push($players, $player1);
        }
        $namePlayer2 = $request->get('player2');
        if ($namePlayer2 != null) {
            $player2 = new Player();
            $player2->setName($namePlayer2);
            $player2->setGame($game);
            $player2->setNbBoxes(1);
            $player2->setNbSoldiers(3);
            $symbol = $request->get('symbolPlayer2');
            $player2->setSymbol($symbol);
            $player2->setColor($this->initialiseColor($symbol));
            array_push($players, $player2);
        }
        $namePlayer3 = $request->get('player3');
        if ($namePlayer3 != null) {
            $player3 = new Player();
            $player3->setName($namePlayer3);
            $player3->setGame($game);
            $player3->setNbBoxes(1);
            $player3->setNbSoldiers(3);
            $symbol = $request->get('symbolPlayer3');
            $player3->setSymbol($symbol);
            $player3->setColor($this->initialiseColor($symbol));
            array_push($players, $player3);
        }
        $namePlayer4 = $request->get('player4');
        if ($namePlayer4 != null) {
            $player4 = new Player();
            $player4->setName($namePlayer4);
            $player4->setGame($game);
            $player4->setNbBoxes(1);
            $player4->setNbSoldiers(3);
            $symbol = $request->get('symbolPlayer4');
            $player4->setSymbol($symbol);
            $player4->setColor($this->initialiseColor($symbol));
            array_push($players, $player4);
        }

        return $players;
    }

    public function initialiseColor($symbol) {
        if (stristr($symbol, 'rouge')) {
            return 'red';
        }
        if (stristr($symbol, 'rose')) {
            return 'pink';
        }
        if (stristr($symbol, 'verte')) {
            return 'chartreuse';
        }
        if (stristr($symbol, 'jaune')) {
            return 'yellow';
        }
    }

    public function attaqueAction(Request $request) {
        $caseAttaquante = filter_input(INPUT_POST, 'caseAttaquante');
        $caseAttaquee = filter_input(INPUT_POST, 'caseAttaquee');
        dump($caseAttaquante);

        //Recuperation des id des cases
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('RiskBundle:Box');
        $boxAttaquante = $repository->findOneById($caseAttaquante);
        $boxAttaquee = $repository->findOneById($caseAttaquee);

        $playerAttaquant = $boxAttaquante->getPlayer();
        $playerAttaque = $boxAttaquee->getPlayer();

        //Determination des soldats pr le combat
        $soldiersAttaquants = $boxAttaquante->getSoldiers() - 1;
        $soldiersAttaques = $boxAttaquee->getSoldiers();

        //Attaque
        $neutreAttaque = false;
        if ($playerAttaque->getName() === "neutre") {
            $neutreAttaque = true;
        }
        $resultat = $this->resultatAttaque($soldiersAttaquants, $soldiersAttaques, $neutreAttaque);

        //Reste 1 soldat ds la case de depart dans tous les cas
        //Changement de chaque slot
        $repository->videBox($boxAttaquante->getId());

        //Si attaquant gagne, changement de propriétaire de la case attaquée
        if ($resultat['attaquantGagne'] == true) {
            $repository = $em->getRepository('RiskBundle:Player');
            $boxAttaquee->setPlayer($boxAttaquante->getPlayer());
            $nbBoxes = $playerAttaquant->getNbBoxes();
            $nbBoxes++;
            $playerAttaquant->setNbBoxes($nbBoxes);


            $nbBoxes2 = $playerAttaque->getNbBoxes();
            $nbBoxes2 = $nbBoxes2 - 1;
            $playerAttaque->setNbBoxes($nbBoxes2);
        }
        ////Changement des soldats case arrivée
        //Changement de chaque slot
        $repository = $em->getRepository('RiskBundle:Box');
        $repository->defineSlotBox($boxAttaquee->getId(), $resultat['survivants']);
        //Changement du nbBox de chaque Player
        //Verification si gagnant

        $parametersTest = array();
        array_push($parametersTest, $soldiersAttaquants);
        array_push($parametersTest, $soldiersAttaques);

        /*
         * A renvoyer:
         * Attaquant a gagné?
         * combien de soldats ds case attaquée
         * A qui appartient la case attaquée
         */

        //Sauvegarde des changements
        $em->flush();
        //Changement du nbSoldiers de chaque Player
        $repository = $em->getRepository('RiskBundle:Player');
        dump($repository->countSoldiers($playerAttaquant->getId()));
        $playerAttaquant->setNbSoldiers($repository->countSoldiers($playerAttaquant->getId())[0][1]);
        $playerAttaque->setNbSoldiers($repository->countSoldiers($playerAttaque->getId())[0][1]);

        $em->flush();

        $repository = $em->getRepository('RiskBundle:Game');
        $session = $request->getSession();
        $game = $repository->findOneById($session->get('idGame'));
        $players = $game->getPlayers();
        $player0 = $players[0];
        $player1 = $players[1];
        $player2 = $players[2];

        $boxes = $repository->getBoxes($game->getId());
        return new JsonResponse($resultat);
    }

    public function reloadGrilleAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('RiskBundle:Game');
        $session = $request->getSession();
        $game = $repository->findOneById($session->get('idGame'));
        $players = $game->getPlayers();
        $player0 = $players[0];
        $player1 = $players[1];
        $player2 = $players[2];

        $boxes = $repository->getBoxes($game->getId());


        $grille = new Grille();
        $html = $grille->getGrille($game->getWidth(), $game->getHeight(), $boxes, $player0, $player1, $player2);
        dump($boxes);
        dump($html);


        $resultat['grilleHTML'] = $html;
        $resultat['player0'] = array("nbBoxes" => $player0->getNbBoxes(), "nbSlots" => $player0->getNbSoldiers());
        $resultat['player1'] = array("nbBoxes" => $player1->getNbBoxes(), "nbSlots" => $player1->getNbSoldiers());
        $resultat['player2'] = array("nbBoxes" => $player2->getNbBoxes(), "nbSlots" => $player2->getNbSoldiers());

        return new JsonResponse($resultat);
    }

    public function resultatAttaque($attaquants, $attaques, $neutreAttaque = false) {
        $forceAttaquante = 0;
        $forceAttaquee = 0;
        $survivants = 0;
        $valeurDeMax = 6;
        $valeurMaxDeNeutre = 2;

        $attaquantGagne = false;

        //Determination des forces globales
        for ($index = 0; $index < $attaquants; $index++) {//Chaque soldat représente un dé de 1 à 6
            $forceAttaquante+=rand(1, $valeurDeMax);
        }
        for ($index = 0; $index < $attaques; $index++) {
            if ($neutreAttaque) {
                $forceAttaquee+=rand(1, $valeurMaxDeNeutre);
            } else {
                $forceAttaquee+=rand(1, $valeurDeMax);
            }
        }

        //Determination du gagnant
        if ($forceAttaquante > $forceAttaquee) {
            $attaquantGagne = true;
        }

        //Determination des survivants
        if ($attaquantGagne) {
            $survivants = round($attaquants - ($attaquants * $forceAttaquee / $forceAttaquante));
            if ($survivants < 1) {
                $survivants = 1;
            }
        } else {
            $survivants = round($attaques - ($attaques * $forceAttaquante / $forceAttaquee));
            if ($survivants < 1) {
                $survivants = 1;
            }
        }

        $resultat = array();
//        array_push($resultat, $attaquantGagne);
//        array_push($resultat, $survivants);
        $resultat['attaquantGagne'] = $attaquantGagne;
        $resultat['survivants'] = $survivants;

        return $resultat;
    }

    public function addSoldiersAction() {
        $em = $this->getDoctrine()->getManager();
        $stringNewSlots = filter_input(INPUT_POST, 'stringNewSlots');
        $newSlots = explode("/", $stringNewSlots);
        $repository = $em->getRepository('RiskBundle:Slot');
        foreach ($newSlots as $idSlot) {
            $slot = $repository->findOneById($idSlot);
            $slot->setFree(false);
            $em->flush();
        }
        return $this->redirectToRoute('lancement');
    }

}
