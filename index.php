<?php
require 'vendor/autoload.php';

use App\Controller\TopicController;

//controller
$topic = new TopicController();

//routes api
Flight::route("GET /api/topic", array($topic,'index'));
Flight::route("GET /api/topic/@id", array($topic,'show'));
Flight::route("POST /api/topic", array($topic,'store'));
Flight::route("PUT /api/topic/@id", array($topic,'update'));
Flight::route("DELETE /api/topic/@id", array($topic,'destroy'));

Flight::start();