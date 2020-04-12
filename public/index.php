<?php




use App\Wcs\Hello;

require '../vendor/autoload.php';
$talk = new Hello();
echo $talk->talk()