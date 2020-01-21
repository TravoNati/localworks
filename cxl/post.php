<?php

$data = array(
    'election' => 1,
    'key' => 'trav2014'
);
# Create a connection
$url = 'https://error-inspector.herokuapp.com/cxlworks';
$ch = curl_init($url);
# Form data string
$postString = http_build_query($data, '', '&');
# Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$response = curl_exec($ch);
curl_close($ch);
echo $response;
?>
