
<?php
session_start();

require "Utils/MySQLUtils.php";
require "Model/User.php";
require "Model/Cart.php";
require "Model/Product.php";
require "Model/Order.php";
require "Common/AppConstats.php";
require "Common/UrlUtil.php";
$controller = filter_input(INPUT_GET, 'controller');

if ($controller == null)
  $controller = filter_input(INPUT_POST, 'controller');

if ($controller == null)
  $controller = AppConstats::Index_CONTROLLER;

include 'Controller/' . $controller . '.php';
