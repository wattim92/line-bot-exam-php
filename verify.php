<?php
$access_token = '6D+01eig436Njakvxmrdvc98eZ+x9S56W7p/J9m61gghqCSJ9ilqy4QZumarStF0qETOeBoD9b99M1Y6OPzqUQvc4r+lgJ+7br+zxmZlaMgTAXkACsERtqYLx9Yvwc+2QEOHumzlFwOlGlDZEZyQ0QdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
