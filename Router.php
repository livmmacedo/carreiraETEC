<?php

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouterSwitch
{
    
    public function run(string $requestUri)
    {
        $route = substr($requestUri, 1);
        $route = str_replace("carreiraETEC/", "", $route);

        error_log("Rota requisitada: $route",0);
        $parts = explode($route,"/"); //querando requisição
        error_log("Partes da requisição: ".print_r($parts,true),0);

        $page = $parts[0];
        $operation = count($parts)>1?$parts[1]:null;

       

        if ($route == '') {
            $this->home();
        } else {
            $this->$page($operation);
        }
    }
}