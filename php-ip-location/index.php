<?php

$var= unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
//var_dump ($var);

echo"El código del país es: ".$var['geoplugin_countryCode'];
echo"El nombre del país es: ".$var['geoplugin_countryName'];
