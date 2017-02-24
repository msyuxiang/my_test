<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Robots
 *
 * @author yo
 */
class Robots extends \Phalcon\Mvc\Model{
	//put your code here
	//默认情况下，对应数据表"robots"
	
	//手动映射到其他数据表中
	public function getSource() {
		return "the_robots";
	}
}
