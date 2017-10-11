<?php
$access_token = 'DJtyIqlA8/UyMrw4RTKUtsu5+PTEF3/G8OhR99Ohp4SoWsLHuEBtJhUxV2NX33GEugxl6No5Rc0z4jnsGhPHXq6go3mODx+1DIawgJ9pwXF9vupTW4iZko695lbE9fSr6dC3YWdiCV7mMaCnUDCfTgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;