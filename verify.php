<?php
$access_token = 'p2I+qsZBo9X9ntKN72zKwGfIw+Qdx31p9aaHTwDOXrwDk5Zildbfw6NsXWVPXFh/QpcX7VHFxgAjXAkqBN7gIZ8BwyoeDHr9cSrIRXEbs+QNrg8HN8RqAaQjVWIScMuvcrwnBOu2Dkn9fL9aEt4VwwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
