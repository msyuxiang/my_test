<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyController
 *
 * @author yo
 */
use Phalcon\Mvc\Controller;
class MyController extends Controller {
	//put your code here
	public function registerAction() {
		$my = new My();
		$myForm = new MyForm($my);
		$this->view->setVar('myForm', $myForm);
	}
	
}
