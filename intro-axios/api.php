<?php
header ('Access-Control-Allow-Origin: *');
$var=unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

/*  var_dump($var); */

echo $var['geoplugin_countryName'];
