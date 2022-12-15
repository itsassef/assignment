<?php

$payload = http_build_query(
    array(
        'client_id' => 'ju16a6m81mhid5ue1z3v2g0uh',
        'email' => 'example@yourname.com',
        'name' => 'John Doe',
    )
);

$options = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $payload
    )
);

$context  = stream_context_create($options);

$result = file_get_contents('https://api.supermetrics.com/assignment/register', true, $context);

$token = json_decode($result)->data->sl_token;

echo $token;

?>