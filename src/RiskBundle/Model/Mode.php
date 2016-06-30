<?php

namespace RiskBundle\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mode
 *
 * @author Tim
 */
class Mode {

    /**
     * @var \RiskBundle\Entity\Player 
     */
    private $player;

    /**
     * @var string
     */
    private $value;

    public function setPlayer(\RiskBundle\Entity\Player $player) {
        $this->player = $player;
        return $this;
    }

    public function getPlayer() {
        return $this->player;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function getValue() {
        return $this->value;
    }

}
