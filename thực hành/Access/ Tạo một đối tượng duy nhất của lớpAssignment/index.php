<?php

class Application
{
    private static Application $instance;

    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();

