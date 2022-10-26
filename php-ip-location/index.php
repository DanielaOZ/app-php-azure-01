<?php

$var= unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
//var_dump ($var);

echo"La IP del cliente es: ".$var['geoplugin_request'];
