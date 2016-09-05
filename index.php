<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 05/09/16
 * Time: 14:53
 */
require_once "vendor/autoload.php";

$app = new Silex\Application;

$app['debug'] = true;

$app->get('/',function(){
   return "Hello World";
});


$app->run();

