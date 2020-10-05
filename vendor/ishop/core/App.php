<?php


namespace ishop;


class App
{
    public static $app;

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::getInstance();
        $this->getProperties();
        new ErrorHandler();
    }

    protected function getProperties()
    {
        $params = require_once CONF . '/params.php';
        foreach($params as $k => $v) {
            self::$app->setProperty($k, $v);
        }
    }
}