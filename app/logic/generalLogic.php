<?php
use Phalcon\Mvc\Model;
use Phalcon\Logger\Adapter\File as FileAdapter;


/**
 * 特定のパラメータをエスケープして返す
 * @param unknown $name
 */
function getSafeParam($name)
{
	return htmlspecialchars($_REQUEST[$name], ENT_QUOTES);
}

/**
 * すべてのパラメータをエスケープして返す
 * @return string[]
 */
function getSafeParams()
{
	$safe_params = array();
	foreach ($_REQUEST as $key => $values)
	{
		$safe_params[$key] = htmlspecialchars($values, ENT_QUOTES);
	}
	return $safe_params;
}

