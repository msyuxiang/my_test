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
		
		$name = new Text("name", array("maxlength" => 20, "placeholder" => "Type your name"));
		$name->setLabel("ユーザー名");
		$this->add($name);
		
		$email = new Text("email", array("maxlength" => 20, "placeholder" => "Type your email"));
		$email->setLabel("メールアドレス");
		$this->add($email);
		
		$password = new Password("password", array("maxlength" => 20, "placeholder" => "Type your password"));
		$password->setLabel("パスワード");
		$this->add($password);
		
		$save = new Submit("save", array());
		$save->setLabel("保存");
		$this->add($save);
		
		$submit = new Submit("submit", array());
		$submit->setLabel("提出");
		$this->add($submit);
		
	}
}
