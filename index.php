<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('block_io.php');

$apiKey = 'xxxx-xxxx-xxxx-xxxx';
$version = 2; // API version
$pin = 'xxxxxx';
$block_io = new BlockIo($apiKey, $pin, $version);

$balance = $block_io->get_address_balance(array('addresses' => '2N6rmc2rcsFnPQHPskzVRGQ9XyHbEmyPudX'));
var_dump($balance);
