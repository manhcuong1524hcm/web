<?php

class AppConstats
{
    const BASE_URL = "http://localhost/";

    const  USER_CONTROLLER = "UserController";

    const  CART_CONTROLLER = "CartController";

    const  PRODUCT_CONTROLLER = "ProductController";

    const  ORDER_CONTROLLER = "OrderController";

    const  Index_CONTROLLER = "Controller";

    public static function GET_SEEVER_ROOT()
    {
        return $_SERVER["DOCUMENT_ROOT"];
    }

    public static function GET_APP_ROOT_PATH()
    {
        return $_SERVER["DOCUMENT_ROOT"] . "";
    }
}
