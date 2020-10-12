<?php



namespace Models;

/**
 * Description of Monster
 *
 * @author serba
 */
class Monster extends \Models\Caracter {

    public function __construct(array $heroes = array()) {
        $this->specs = $heroes;
        $this->name = 'Monster';
        parent::__construct($heroes);
    }

    public function play() {
        $hero = require 'config.php';

        parent::load($hero[$this->name]);
    }

}
