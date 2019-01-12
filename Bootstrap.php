<?php
use App\App;

$app = App::getApp();
$app->loadFromFile(__DIR__.'services.yml');
$app->loadFromFile(__DIR__.'environment.yml');