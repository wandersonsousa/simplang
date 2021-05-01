<?php 
require_once './src/config/app.php';

function base_url(string $endpoint = '/'){
    return AppConfig::base_url . $endpoint;
}