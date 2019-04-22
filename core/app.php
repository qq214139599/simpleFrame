<?php

class App
{
    public function __construct()
    {
    }

    public static function bootstrap()
    {
        self::init();
        self::autoload();
        self::routing();
    }

    private static function init()
    {
        session_start();
    }

    private static function routing()
    {
        $controller = $_REQUEST['c'];
        $controllerName = $controller . "Controller";
        $action = $_REQUEST['a'];
        $controller = new $controllerName;
        $controller->$action();
    }

    private static function autoload()
    {
        spl_autoload_register(function($className){
            if (substr($className, -10) == "Controller"){
                require_once APPPATH . 'controllers/' . str_replace("Controller", "", $className) . ".php";
            } elseif (substr($className, -5) == "Model"){
                require_once  APPPATH . 'models/' . str_replace("Model", "", $className) . ".php";
            } elseif (substr($className, -3) == "Dao"){
                require_once APPPATH . 'models/daos/' . str_replace("Dao", "", $className) . ".php";
            }
        });
    }
}
