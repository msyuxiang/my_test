<?php
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Url;
use Phalcon\Session\Adapter\Files as Session;
use Phalcon\Http\Response\Cookies;
use Phalcon\Crypt;

try{
	//注册自动加载器
	$loader =new Loader();
	$loader->registerDirs(array(
		'../app/controllers/',
		'../app/models/')
	)->register();
	
	//创建一个依赖注入类
	$di=new FactoryDefault();
	
	//注册view服务
	$di['view'] = function() {
        $view = new View();
        $view->setViewsDir('../app/views/');
        return $view;
    };
	
	//注册Yu服务（是一个类）
	//调用时，$this->Yu(服务名)
	$di->set("yu", function(){
		$yu = new YuController();
		return $yu;
	});
	//注册URL服务
	$di->set('url', function (){
		$url = new Url();
		$url->setBaseUri('/my_test/public/');
		return $url;
	});
	
	//注册session服务
	$di->set('session', function () {
		$session = new Session();
		$session->start();
		return $session;
	});
	
	//注册cookie服务
	$di->set('cookie',function(){
		$cookie = new Cookies();
		$cookie->useEncryption(true);//开启了加密
		return $cookie;
	});
	
	//需要一个加密服务
	
	$di->set('crypt',function(){
		$crypt = new Crypt();
		$crypt->setKey('#xin8$fp?=x*.ak//j1v#');
		return $crypt;
	});
	//处理请求
	$application =new Application($di);
	echo $application->handle()->getContent();
	
} catch (Exception $ex) {
	echo "捕捉到Phalcon异常：", $ex->getMessage();
}

