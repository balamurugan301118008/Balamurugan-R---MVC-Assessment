<?php

require_once 'controllers/UserController.php';
class router
{
    public $route = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new UserController();
    }
    public function get($uri,$action)
    {
        $this->route[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=> 'GET'
        ];
    }
    public function post($uri,$action)
    {
        $this->route[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=> 'POST'
        ];
    }
    public function delete($uri,$action)
    {
        $this->route[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=> 'POST'
        ];
    }
    public function put($uri,$action)
    {
        $this->route[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=> 'POST'
        ];
    }
    public  function routes($uri,$method)
    {
        foreach ($this->route as $routes){
            if($routes['uri'] === $uri && $routes['method'] === $method)
            {
                $action = $routes['action'];
                switch ($action){
                    case 'form':
                        $this->controller->form();
                        break;
                    case 'create':
                        $this->controller->create();
                        break;
                    case 'list':
                        $this->controller->listProductDetails();
                        break;
                    case 'delete':
                        $this->controller->delete($_POST['delete']);
                        break;
                    case 'edit':
                        $this->controller->edit($_POST['edit']);
                        break;
                    case 'update':
                        $this->controller->update($_POST['update']);
                }
            }
        }
    }
}