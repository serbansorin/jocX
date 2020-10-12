<?php

namespace Models;


/*
  Use a factory mode for more caracters
 */

/**
 * Description of Caracter
 *
 * @author serba
 */
class Caracter {

    public $name;
    public $health;
    public $strengh;
    public $defense;
    public $speed;
    public $luck;

    public function __construct(Array $heroes = array()) {
        foreach ($heroes as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function load($hero) {

        foreach ($hero as $key => $value) {
            $this->{$key} = $value;
        }
    }

    // TODO Use a factory class
    #Pentru expansiunea jocului am gandit ca o clasa gen factory,
    #in caz ca sunt multe, multe caractere


    public static function select($name) {
        $heroes = include __DIR__.'/config.php';
        switch ($name) {
            case 'Ordeus':
                return new Ordeus($heroes['Ordeus']);
            case 'Monster':
                return new Monster($heroes['Monster']);
            default:
                throw new Exception("Unrecognized Player");
        }
    }

}
