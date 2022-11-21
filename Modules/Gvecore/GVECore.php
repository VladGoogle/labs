<?php

namespace Weblab\Gvecore;

use Exception;
use Weblab\controllers\BaseController;

class GVECore
{
    private $config = [];
    protected static $instance;

    public function getConfig(): void
    {
        $data = parse_ini_file('../config/config.ini');

        $this->config['sitename'] = $data['sitename'];
        $this->config['controller'] = $data['controller'];
        $this->config['action'] = $data['action'];
        $this->config['username'] = $data['username'];
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance(): GVECore
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return void
     * @throws Exception
     */
    public function handleRequest(): void
    {
        $this->getConfig();

        $classname = 'Weblab\controllers\\' . $this->config['controller'];
        $actionname = $this->config['action'];

        try {
            if (class_exists($classname)) {
                $controller = new $classname();
                if (is_subclass_of($controller, BaseController::class)) {
                    if (method_exists($controller, $actionname)) {
                        $controller->$actionname();
                    } else throw new Exception('Wrong action name');
                } else throw new Exception('Wrong classname');
            } else throw new Exception('This class does not exist');

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}