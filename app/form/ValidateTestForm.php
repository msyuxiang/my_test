<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;

$validation = new Validation();

//public add (mixed $field, Phalcon\Validation\ValidatorInterface $validator)
//Adds a validator to a field
$validation->add("new", new PresenceOf(["message" => "The name is required."]));

$validator->add("email", new PresenceOf(["message" => "The e-mail is required."]));

$validator->add("email", new PresenceOf(["message" => "The e-mail if not valid."]));

//validate ([array | object $data], [object $entity])
//Validate a set of data according to a set of rules,返回验证结果的信息。
$messages = $validator->validate($_POST);

if(count($messages)){
	foreach($messages as $message){
		echo $message, "<br />";
	}
}
