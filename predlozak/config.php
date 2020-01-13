<?php  
session_start();
$brojevi = [];
$_SESSION['brojevi'] = $brojevi;
$indeks = 0;
$_SESSION['indeks'] = $indeks;

$nazivapp = 'Zimski projekt';
$dev = $_SERVER['HTTP_HOST']==='localhost'
        || $_SERVER['HTTP_HOST']==='127.0.0.1'
          ? true : false;
?>