<?php


require_once __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$talk = new Hello();
echo $talk->talk();


echo SayHello::world();