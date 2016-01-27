<?php
require 'vendor/autoload.php';
require 'db/db.php';

$app = new Slim\App();

$app->get('/hello/{name}', function ($request, $response, $args) {
	$banco = Db::getInstance()->select('atributo', '*');
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->run();