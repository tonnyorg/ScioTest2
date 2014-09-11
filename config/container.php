<?php

// Classes
$container['warrior'] = 'Guerrero';
$container['item'] = 'Espada';

// Warriors
$container['paladin'] = function ($c) {
	return new $c['warrior']('Conan ha');
};
$container['elfo'] = function ($c) {
	return new $c['warrior']('Légolas ha');
};
$container['mago'] = function ($c) {
	return new $c['warrior']('Merlín ha');
};

// Items
$container['espada'] = function ($c) {
	return new $c['item']('partido en dos al enemigo');
};
$container['arco'] = function ($c) {
	return new $c['item']('acertado en el corazón del enemigo');
};
$container['hechizo'] = function ($c) {
	return new $c['item']('convertido en mono al enemigo');
};