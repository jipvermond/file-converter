<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Human{
    private $_gender;
    private $_birthdate;
    private $_deathdate;
    
    public function __construct($gender) {
        $this->_gender = $gender;
    }
    
}

class Person extends Human{
    private $_taxnumber;
    public $name;
    
    public function __construct($gender, $name) {
        $this->name = $name;
        parent::__construct($gender);
    }
    
}