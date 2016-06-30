<?php

namespace RiskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Box
 *
 * @ORM\Table(name="box", indexes={@ORM\Index(name="idplayer", columns={"player"})})
 * @ORM\Entity(repositoryClass="RiskBundle\Repository\BoxRepository")
 */
class Box {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Player
     *
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="boxes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="player", referencedColumnName="id")
     * })
     */
    private $player;

    /**
     * @ORM\OneToMany(targetEntity="RiskBundle\Entity\Slot", mappedBy="box", cascade={"remove", "persist"})
     */
    private $slots;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set player
     *
     * @param \RiskBundle\Entity\Player $player
     *
     * @return Box
     */
    public function setPlayer(\RiskBundle\Entity\Player $player = null) {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \RiskBundle\Entity\Player
     */
    public function getPlayer() {
        return $this->player;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->slots = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add slot
     *
     * @param \RiskBundle\Entity\Slot $slot
     *
     * @return Box
     */
    public function addSlot(\RiskBundle\Entity\Slot $slot) {
        $this->slots[] = $slot;
        $slot->setBox($this);

        return $this;
    }

    /**
     * Remove slot
     *
     * @param \RiskBundle\Entity\Slot $slot
     */
    public function removeSlot(\RiskBundle\Entity\Slot $slot) {
        $this->slots->removeElement($slot);
    }

    /**
     * Get slots
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSlots() {
        return $this->slots;
    }

    /**
     * Get soldiers not free of a boxe
     *
     * @return integer
     */
    public function getSoldiers() {

        $countSoldiers = 0;
        foreach ($this->getSlots() as $slot) {
            if (!$slot->getFree()) {
                $countSoldiers++;
            }
        }
        return $countSoldiers;
    }

}
