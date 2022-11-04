<?php

$var= unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
//var_dump ($var);

echo "La ip es: ".$var['geoplugin_request'];
$code=$var['geoplugin_countryCode'];
//echo"<br> El nombre del país es: ".$var['geoplugin_countryName'];

$curl=curl_init();
$url="https://backendapp-daniels-02.azurewebsites.net/php-ip-location/select.php?code=".$code;
curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);
var_dump($result);
curl_close($curl);
