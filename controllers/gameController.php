<?php
use Slim\Slim;

class GameController
{

	public static function getIndex($warrior, $item)
	{
		$app = Slim::getInstance();
		$response = array();
		$container = $app->custom_container;
		if (isset($container[$warrior], $container[$item])) {
			$warriorObj = $container[$warrior];
			$warriorObj->setItem($container[$item]);
			$response['response'] = $warriorObj->atacar();
		} else {
			$response['response'] = 'Selección no válida.';
		}
		return $response;
	}

}