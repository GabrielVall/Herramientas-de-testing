<?php
$local = true;
$main_url = 'http://localhost/herramientas-de-testing/';
function actual_tab(){
    $tabs = explode("/", $_SERVER['REQUEST_URI']);
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        return $tabs[1];
    }else{
        return $tabs[2];
    }
}