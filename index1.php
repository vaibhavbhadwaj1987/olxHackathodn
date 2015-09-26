<?php

$path= explode(".",$_REQUEST['dispath']);
$controller= $path[0];
$action= $path[1];
if(!class_exists($controller)){
        include('controllers/'.$controller.'.php');
}
$controllerClass= new $controller();
$action=$action.'Action';
$controllerClass->$action();

