<?php
/**
 *
 */
 require_once('config.php');
class RouteHelper
{
  /*
  * Get the URI and format /**
  * Output : Two strings, a class name and a methos name
  */
  static public function getRoute()
  {
    // On va decouper l'uri en deux, et renvoyer les deux morceau
    $baseUri = $_SERVER['REQUEST_URI'];
    $baseUri = substr($baseUri, 1);
    $uris = explode('/', $baseUri);
    $uris[0] = $uris[0] . Config::CLASS_SUFFIX;
    if (count($uris)!== 2) {
      throw new \Exception("Error Processing Request", 1);
    }
    self::executeAction($uris);
  }
  static private function executeAction($uris)
  {
    // @TODO Catch exception coming from autoloader
    ucfirst($uris[0])::{$uris[1]}();
  }
}
