<?php
/**
 *
 */
 class ConnectionHelper
 {
  
     public static function checkConnectedUser()
     {
         if(isset($_SESSION[Config::SESSION_KEY])) {
             $user = new UserModel();
             $user->checkConnection($_SESSION[Config::SESSION_KEY]);
         } else {
             header('Location: ' . Config::LOGIN_URI);die;
         }
     }
 }
