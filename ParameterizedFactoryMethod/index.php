<?php

ini_set('display_errors', 'On');
error_reporting(-1);

include_once('Creator.php');
include_once('Product.php');
include_once('TextProduct.php');
include_once('TextFactory.php');
include_once('GraphicsProduct.php');
include_once('GraphicsFactory.php');
include_once('Client.php');

$worker = new TextAndGraphics\Client();
