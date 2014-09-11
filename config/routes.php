<?php

// Index
$app->get('/', function () use ($app) {
	$app->response->headers->set('Content-Type', 'text/html; charset=utf-8');
    $app->render('home.php');
});

// API
$app->get('/api/:warrior/:item', function ($warrior, $item) use ($app) {
	$app->response->headers->set('Content-Type', 'application/json');
	$response = GameController::getIndex($warrior, $item);
	$app->response->setBody(json_encode($response));
});