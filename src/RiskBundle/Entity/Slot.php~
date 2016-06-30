<?php

namespace RiskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slot
 *
 * @ORM\Table(name="slot", indexes={@ORM\Index(name="idBox", columns={"box"})})
 * @ORM\Entity
 */
class Slot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="free", type="boolean", nullable=false)
     */
    private $free = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var \Box
     *
     * @ORM\ManyToOne(targetEntity="Box", inversedBy="slots")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="box", referencedColumnName="id")
     * })
     */
    private $box;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set free
     *
     * @param boolean $free
     *
     * @return Slot
     */
    public function setFree($free)
    {
        $this->free = $free;

        return $this;
    }

    /**
     * Get free
     *
     * @return boolean
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Slot
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set box
     *
     * @param \RiskBundle\Entity\Box $box
     *
     * @return Slot
     */
    public function setBox(\RiskBundle\Entity\Box $box = null)
    {
        $this->box = $box;

        return $this;
    }

    /**
     * Get box
     *
     * @return \RiskBundle\Entity\Box
     */
    public function getBox()
    {
        return $this->box;
    }
}
