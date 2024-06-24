<?php
require '../vendor/autoload.php';

$hello =  new App\Hello\Hello();
echo $hello->talk();
