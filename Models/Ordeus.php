<?php

/*
 * Clasa Ordeus;
 */

namespace Models;

/**
 * Description of Ordeus
 *
 * @author serba
 */
class Ordeus extends \Models\Caracter {

    public function __construct(array $heroes = array()) {
        $this->specs = $heroes;
        $this->name = 'Ordeus';
        parent::__construct($heroes);
    }

    public function play() {
        $hero = require 'config.php';

        parent::load($hero[$this->name]);
    }

}
