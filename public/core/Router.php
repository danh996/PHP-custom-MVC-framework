<?php
    class Router{
        public static function route($url){
            $controller =  (isset($url[0]) && $url[0] != '') ? ucfirst($url[0]) : DEFAULT_CONTROLLER;
            $controller_name = $controller;
            array_shift($url);

//            action

            $action =  (isset($url[0]) && $url[0] != '') ? $url[0] . 'Action' : 'indexAction';
            $action_name = $action;
            array_shift($url);
//    param
            $queryParams = $url;
            $dispatch = new $controller($controller_name, $action);
            if(method_exists($controller, $action)){
                call_user_func_array([$dispatch, $action], $queryParams);
            } else {
                die("This method is not exist in the controllers ". $controller_name);
            }
        }
    }