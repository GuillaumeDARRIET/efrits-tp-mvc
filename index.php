<?php
require_once('config.php');

function router() {
  mb_internal_encoding("UTF-8");
  $uri = $_SERVER["REQUEST_URI"];
  $uriGetTab = explode('?', $uri);
  $uri = substr($uriGetTab[0], 0, 1) === "/" ? substr($uriGetTab[0], 1) : $uriGetTab[0];
  $uriTab = explode("/", $uri);
  $controllerName = ucfirst(strtolower($uriTab[0]));
  if(!$controllerName || $controllerName === '') {
    $controllerName = 'Index';
  }
  $controllerName .= 'Controller';

  $controllPath = realpath(ROOT.'/controller/'.$controllerName.'.php');
  if($controllPath && file_exists($controllPath)) {
    require_once($controllPath);
  } else {
    require_once(ROOT.'/controller/NotfoundController.php');
    $controllerName = 'NotfoundController';
  }

  array_shift($uriTab);
  $controller = new $controllerName($uriTab);
  $controller->view();
}

router();