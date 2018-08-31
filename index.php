<?php
require_once('config.php');
session_start();

  spl_autoload_register(function($className) {
    $directory = '';
    if (strpos($className, 'Helper')) {
      $directory = 'helpers';
    } elseif(strpos($className, 'Controller')) {
        $directory = 'controllers';
    } elseif(strpos($className, 'Model')) {
      $directory = 'models';
    } else {
      throw new \Exception("Error including class. Check your code.", 1);
    }
    include './' . $directory . '/' . $className . '.php';
  });

RouteHelper::getRoute();
