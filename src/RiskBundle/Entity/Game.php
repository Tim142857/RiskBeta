<?php

namespace RiskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="RiskBundle\Repository\GameRepository")
 */
class Game {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbPlayers", type="integer", nullable=false)
     */
    private $nbplayers;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer", nullable=false)
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="text", length=65535, nullable=false)
     */
    private $mode;

    /**
     * @ORM\OneToMany(targetEntity="RiskBundle\Entity\Player", mappedBy="game", cascade={"remove", "persist"})
     */
    private $players;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nbplayers
     *
     * @param integer $nbplayers
     *
     * @return Game
     */
    public function setNbplayers($nbplayers) {
        $this->nbplayers = $nbplayers;

        return $this;
    }

    /**
     * Get nbplayers
     *
     * @return integer
     */
    public function getNbplayers() {
        return $this->nbplayers;
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return Game
     */
    public function setWidth($width) {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return Game
     */
    public function setHeight($height) {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return Game
     */
    public function setMode($mode) {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode() {
        return $this->mode;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add player
     *
     * @param \RiskBundle\Entity\Player $player
     *
     * @return Game
     */
    public function addPlayer(\RiskBundle\Entity\Player $player) {
        $this->players[] = $player;
        $player->setGame($this);

        return $this;
    }

    /**
     * Remove player
     *
     * @param \RiskBundle\Entity\Player $player
     */
    public function removePlayer(\RiskBundle\Entity\Player $player) {
        $this->players->removeElement($player);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayers() {
        return $this->players;
    }

    /**
     * Get all boxes for a game
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBoxes() {
        $boxes = array();
        foreach ($this->getPlayers() as $player) {
            foreach ($player->getBoxes() as $box) {
                array_push($boxes, $box);
            }
        }
        return $boxes;
    }

}
