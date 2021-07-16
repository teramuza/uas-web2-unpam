<?php 

$base_url = 'http'; // default http, use https if your domain is using ssl
$base_url .= "://".$_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

$model_url = $base_url."model/";