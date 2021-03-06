<?php

namespace RiskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Player
 *
 * @ORM\Table(name="player", indexes={@ORM\Index(name="idGame", columns={"game"})})
 * @ORM\Entity(repositoryClass="RiskBundle\Repository\PlayerRepository")
 */
class Player {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="text", length=65535, nullable=false)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="text", length=65535, nullable=false)
     */
    private $symbol;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbBoxes", type="integer", nullable=false)
     */
    private $nbboxes;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbSoldiers", type="integer", nullable=false)
     */
    private $nbsoldiers;

    /**
     * @var \Game
     *
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="game", referencedColumnName="id")
     * })
     */
    private $game;

    /**
     * @ORM\OneToMany(targetEntity="RiskBundle\Entity\Box", mappedBy="player", cascade={"remove", "persist"})
     */
    private $boxes;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Player
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Player
     */
    public function setColor($color) {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Set symbol
     *
     * @param string $symbol
     *
     * @return Player
     */
    public function setSymbol($symbol) {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol() {
        return $this->symbol;
    }

    /**
     * Set nbboxes
     *
     * @param integer $nbboxes
     *
     * @return Player
     */
    public function setNbboxes($nbboxes) {
        $this->nbboxes = $nbboxes;

        return $this;
    }

    /**
     * Get nbboxes
     *
     * @return integer
     */
    public function getNbboxes() {
        return $this->nbboxes;
    }

    /**
     * Set nbsoldiers
     *
     * @param integer $nbsoldiers
     *
     * @return Player
     */
    public function setNbsoldiers($nbsoldiers) {
        $this->nbsoldiers = $nbsoldiers;

        return $this;
    }

    /**
     * Get nbsoldiers
     *
     * @return integer
     */
    public function getNbsoldiers() {
        return $this->nbsoldiers;
    }

    /**
     * Set game
     *
     * @param \RiskBundle\Entity\Game $game
     *
     * @return Player
     */
    public function setGame(\RiskBundle\Entity\Game $game = null) {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \RiskBundle\Entity\Game
     */
    public function getGame() {
        return $this->game;
    }

    /**
     * Add box
     *
     * @param \RiskBundle\Entity\Box $box
     *
     * @return Player
     */
    public function addBox(\RiskBundle\Entity\Box $box) {
        $this->boxes[] = $box;
        $box->setPlayer($this);

        return $this;
    }

    /**
     * Remove box
     *
     * @param \RiskBundle\Entity\Box $box
     */
    public function removeBox(\RiskBundle\Entity\Box $box) {
        $this->boxes->removeElement($box);
    }

    /**
     * Get boxes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBoxes() {
        return $this->boxes;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->boxes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Return  int
     * Sort by Id
     * Parameters: 2 objects with id attributes
     */
    public function sortById($a, $b) {
        return strcmp($a->getId(), $b->getId());
    }

}
