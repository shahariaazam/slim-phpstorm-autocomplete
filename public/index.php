<?php
require "../vendor/autoload.php";

$app = new \Slim\App();

$container = $app->getContainer();
/**
 * @return \ShahariaAzam\Classes\HintsClass
 */
$container['hints'] = function () {
    return new \ShahariaAzam\Classes\HintsClass();
};

$app->get('/foo', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    /** @var Dummy $this */
    $this->hints->printHelloWorld();
    $response->write("Hello World");
});

$app->get('/another-foo', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    /** @var Dummy $this */
    $this->hints->printHelloWorld();
});

$app->run();