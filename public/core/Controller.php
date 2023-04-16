<?php
class Controller extends Application {
     protected $_controller, $_action;
     public $view;

    public function __construct($controller, $action)
    {
        parent::_construct();
        $this->_controller = $controller;
        $this->_action = $action;
        $this->view = new View();
    }


}