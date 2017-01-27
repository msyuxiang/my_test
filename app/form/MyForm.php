<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\Date;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Submit;
use Phalcon\Forms\Element\Password;

class MyForm extends Form{
	/**
	 * Forms initializer
	 *
	 * @param Users $user
	 * @param array $options
	 */
	public function initialize($model, $options){
		
		$name = new Text("name", array());
		$name->setLabel("Name");
		
		$email = new Text("email", array());
		$email->setLabel("Email");
		
		$email = new Password("password", array());
		$email->setLabel("Password");
		
		$submit = new Submit("submit", array());
		$submit->setLabel("submit");
		
	}
}
