<?php

$action = 'index';
if (isset($_GET['action'])) {
  $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
  $action = $_POST['action'];
}
switch ($action) {
  case 'prod':
    $controller = AppConstats::PRODUCT_CONTROLLER;
    include "./View/index.php";
    break;
  case 'user':
    $controller = AppConstats::USER_CONTROLLER;
    include "./View/index.php";
    break;
  case 'order':
    $controller = AppConstats::ORDER_CONTROLLER;
    include "./View/index.php";
    break;

    // case 'admin':
    //   header('location: Admin');
    //   break;

  default:
    // $prod = new Product();
    // $products = $prod->Find();

    include "./View/index.php";
    break;
}
