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
		'../app/models/',
		'../app/logic/',
		'../app/form/')
	)->register();
	
	$router = new \Phalcon\Mvc\Router();
	$router->removeExtraSlashes(true);
	$router->add("/fund/addconfirm",   			array("controller"=>"fund" ,  "action"=>"addConfirm"));
	$router->add("/fund/addconfirmcheck",   	array("controller"=>"fund" ,  "action"=>"addConfirmCheck"));
	$router->add("/my/confirm",   			array("controller"=>"my" ,  "action"=>"registerConfirm"));

	//创建一个依赖注入类
	$di=new FactoryDefault();
	
	//注册view服务
	$di['view'] = function() {
        $view = new View();
        $view->setViewsDir('../app/views/');
		//注册了一个引擎，而且文件后缀为".volt"的文件会
		//使用Engine里面的Volt类去解析
		//$view->registerEngines(['.volt'=>'Phalcon\Mvc\View\Engine\Volt']);
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
	
	//db service
	$di['db'] = function() {
        return new DbAdapter(array(
            "host"     => "localhost",
            "username" => "root",
            "password" => "masami914",
            "dbname"   => "tutorial",
			"charset"  => "utf8"
        ));
    };
	
	$di->set('crypt',function(){
		$crypt = new Crypt();
		$crypt->setKey('#xin8$fp?=x*.ak//j1v#');
		return $crypt;
	});
	
	//注入数据库服务
//	$di->set('db',function(){
//		return new Phalcon\Db\Adapter\Pdo\Mysql(array(
//			"host"=>"127.0.0.1",
//			"username"=>"root",
//			"password"=>"masami914",
//			"dbname"=>"phalcon",
//			"charset"=>"utf8"
//		));	
//	});
	
	//处理请求
	$application =new Application($di);
	echo $application->handle()->getContent();
	
} catch (Exception $ex) {
	echo "捕捉到Phalcon异常：", $ex->getMessage();
}

