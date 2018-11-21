<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 14.09.17
 * Time: 12:48
 */
class router
{
    private static $route_parts;
    private static  $controller;
    private static  $action;
    private static  $endpoint;

    public static function init($project)
    {
        self::$project();
    }

    private static function admin($request = null, $response = null)
    {
        if(!self::$endpoint) {
            $request = new request;
            $response = new response;
            self::parseRoute();
        }
        if(!self::$controller) {
            self::getController();
            self::getAction();
        }
        self::getEndpoint();
        $class_name = self::$controller . '_' . self::$action . '_controller';
        $file_name = CONTROLLER_DIR . self::$controller . DS . $class_name . '.php';
        if(!file_exists($file_name)) {
            $response->withJson(['status' => 'fail', 'error' => 'Not Found']);
            $response->withStatus(404);
            $response->respond();
        } else {
            $controller = new $class_name($request, $response);
            $method_name = self::$endpoint;
            if(!method_exists($controller, $method_name)) {
                $response->withJson(['status' => 'fail', 'error' => 'Not Found']);
                $response->withStatus(404);
                $response->respond();
            } else {
                $controller->$method_name();
            }
        }
    }

    private function site()
    {
        self::admin();
    }

    private function bot()
    {
        self::admin();
    }
    
    private static function parseRoute()
    {
        if(isset($_GET['route'])) {
            $route = trim($_GET['route'], '\\/');
        } else {
            $route = '';
        }
        registry::set('route', $route);
        if(!$route) {
           self::$route_parts = [];
        } else {
            $parts = explode('?', $route);
            self::$route_parts = explode('/', $parts[0]);
        }
        registry::set('route_parts', self::$route_parts);
        unset($_GET['route']);
    }

    private static function getController()
    {
        if(!self::$route_parts) {
            self::$controller = 'index';
        } else {
            self::$controller = self::$route_parts[0];
        }
        registry::set('controller', self::$controller);
    }

    private static function getAction()
    {
        if(empty(self::$route_parts[1])) {
            self::$action = 'index';
        } else {
            self::$action = self::$route_parts[1];
        }
        registry::set('action', self::$action);

    }

    private static function getEndpoint()
    {
        if(empty(self::$route_parts[2])) {
            self::$endpoint = 'content';
        } else {
            self::$endpoint = self::$route_parts[2];
            registry::set('endpoint', self::$endpoint);
            return true;
        }
        return false;
    }
}