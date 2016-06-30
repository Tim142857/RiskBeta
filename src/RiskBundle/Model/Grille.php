<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RiskBundle\Model;

use RiskBundle\Entity\Game;
use RiskBundle\Entity\Player;
use RiskBundle\Entity\Box;
use RiskBundle\Entity\Slot;
use RiskBundle\Model\Mode;

/**
 * Description of Grille
 *
 * @author Tim
 */
class Grille {

    public function getGrille($height, $width, $boxes, $player0, $player1, $player2) {
        $numCase = 1;
        $grille = "<div class=\"grille\">" . "\n";
        $grille .= "\n" . "<table style=\"border:2px solid black\">" . "\n";
        for ($index = 0; $index < $height; $index++) {//ligne de cases
            $grille.="\t<tr>" . "\n";
            for ($index1 = 0; $index1 < $width; $index1++) {
                //Case
                $grille.="\t\t<td class=\"case\" data-numcase=\"" . $numCase . "\"style=\"background-color:" . $boxes[$numCase - 1]->getPlayer()->getColor() . ";\" data-idcase=\"" . $boxes[$numCase - 1]->getId() . "\" data-player=\"" . $boxes[$numCase - 1]->getPlayer()->getName() . "\">" . "\n"; //Case
                $numSlot = 1;
                $grille.="\t\t\t<table style=\"border:2px solid red \">" . "\n";
                for ($index3 = 1; $index3 < 4; $index3++) {//ligne de slots
                    $grille.="\t\t\t\t<tr>" . "\n";
                    for ($index2 = 1; $index2 < 4; $index2++) {//slots
                        $slot = $boxes[$numCase - 1]->getSlots()[$numSlot - 1];
                        //Slot
                        $grille.="\t\t\t\t\t<td class=\"slot\" data-numcase=\"" . $numCase . "\" data-numslot=\"" . $boxes[$numCase - 1]->getSlots()[$numSlot - 1]->getId() . "\" data-idcase=\"" . $boxes[$numCase - 1]->getId() . "\" data-player=\"" . $boxes[$numCase - 1]->getPlayer()->getName() . "\" ";
                        if ($slot->getFree()) {
                            $grille.="data-free=\"free\"";
                        } else {
                            $grille.="data-free=\"full\"";
                        }
                        $grille.=">" . "\n";
                        if ($slot->getFree()) {
                            $grille.="\t\t\t\t\t\t<img src=\"http://localhost/riskbeta/web/bundles/risk/images/rond-vide.png\" alt=\"free\" style=\"width:15px; height:15px;\">" . "\n";
                        } else {
                            $grille.="\t\t\t\t\t\t<img src=\"http://localhost/riskbeta/web/bundles/risk/images/" . $boxes[$numCase - 1]->getPlayer()->getSymbol() . "\" alt=\"full\" style=\"width:15px; height:15px;\">" . "\n";
                        }
                        $numSlot++;
                        $grille.="\t\t\t\t\t</td>" . "\n";
                    }
                    $grille.="\t\t\t\t</tr>" . "\n";
                }
                $grille.="\t\t\t</table>" . "\n";
                $grille.="\t\t</td>" . "\n";
                $numCase++;
            }
            $grille.="\t</tr>" . "\n";
        }
        $grille.="</table></div>" . "\n";
        return $grille;
    }

}
