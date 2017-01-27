<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IPValidator
 *
 * @author yo
 */

use Phalcon\Validation;
use Phalcon\Validation\Message;
use Phalcon\Validation\Validator;

class IPValidator extends Validator{
	//Executes the validation 
	//validate (Phalcon\Validation $validation, mixed $attribute)
	public function validate(Validation $validator, $attribute) {
		$value = $validator->getValue($attribute);
		
		if (!filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6)) {
			//public getOption (mixed $key, [mixed $defaultValue])
			//Returns an option in the validators options Returns null if the option hasn’t set
			$message = $this->getOption($attribute);
			if (!$message) {
				$message = "The IP is not valid";
			}
			
			//Appends a message to the messages list
			//public appendMessage (Phalcon\Validation\MessageInterface $message)
			$validator->appendMessage(new Message($message, $attribute, "Ip"));
			return false;
		}
		
		return true;
	}
}
