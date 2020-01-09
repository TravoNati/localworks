<?php

$page = file_get_contents("https://carsolize.zendesk.com/api/v2/search/incremental.json?include=highlights&page=30&query=%22Mapping%22+updated%3E%222019-07-01%22");
$ap = json_decode($page); // decode the json record
$ap = (array)$ap->entry; // convert object  to array for further process 
$ap = (array)$ap['gphoto$thumbnail']; // convert object  to array for 

<?
echo $ap['$t']; // display the output
