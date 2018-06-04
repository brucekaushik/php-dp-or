<?php

ini_set('display_errors', 'On');
error_reporting(-1);

include_once('Creator.php');
include_once('Product.php');
include_once('CountryFactory.php');
include_once('KyrgyzstanProduct.php');
include_once('Client.php');

$worker = new Client();
