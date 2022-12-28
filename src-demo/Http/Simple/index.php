<?php

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Server('0.0.0.0', 8000);

$server->on('start', function (Server $server){
    echo "Http server started... " . PHP_EOL;
});


$server->on('request', function (Request $request, Response $response){
    $response->end('<h1>Hello world...</h1>');
});

$server->start();