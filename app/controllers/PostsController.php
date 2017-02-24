<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostsController
 *
 * @author yo
 */
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;
class PostsController extends Controller{
	//put your code here
//	 public function indexAction()
//    {
//
//    }
	public function initialize()
    {
        $this->view->setTemplateAfter("common");
    }
	
	public function showAction($postId) {
		// Pass the $postId parameter to the view
        $this->view->postId = $postId;
		//$this->view->setRenderLevel(View::LEVEL_LAYOUT);
	}
	
	public function lastAction()
    {
        $this->flash->notice(
            "These are the latest posts"
        );
    }
}
