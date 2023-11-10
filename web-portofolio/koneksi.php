<?php

// $__development_domain = ['localhost','192.168.100.48'];

// $_PRODUCTION_ = !in_array($_SERVER['HTTP_HOST'], $__development_domain)  ? true : false;

$hostname = 'localhost';
$username = 'root';
$password =  '';
$database = 'pesan alumni';

$koneksi = new mysqli( $hostname, $username, $password, $database );

//var_dump($_SERVER);

if ($koneksi->connect_error) {
  echo 'Gagal Menghubungkan Ke Database';
  die;
}