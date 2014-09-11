<?php

abstract class GameObject
{

	protected $message = '';

	public function __construct($message)
	{
		$this->message = $message;
	}

}