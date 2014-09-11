<?php

class Guerrero extends GameObject
{

	private $item;

	public function atacar()
	{
		return $this->message.' '.$this->item->usar();
	}

	public function setItem($item)
	{
		$this->item = $item;
	}
}