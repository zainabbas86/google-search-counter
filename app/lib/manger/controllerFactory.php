<?php
namespace Lib\Manger;

use Lib\Core\Controller;

class ControllerManager {

    /**
    * @var Controller
    */
    protected $controller;

    /**
    * @param string $controller
    */
    public function __construct($controller) {
        $this->controller = new $controller();
    }
}
