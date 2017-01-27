<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyValidation
 *
 * @author yo
 */
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
Use Phalcon\Validation\Validator\PresenceOf;

class MyValidation extends Validation{
	//put your code here
	Public function initialize(){
		//public __construct ([array $options]) inherited from Phalcon\Validation\Validator
		//Validates that a value is not null or empty string
		$this->add("name", new PresenceOf(["message" => "The name is required."]));
		$this->add("email", new PresenceOf(["message" => "The email is required."]));
		$this->add("email", new PresenceOf(["message" => "The e-mail is not valid."]));
	}
	
}
