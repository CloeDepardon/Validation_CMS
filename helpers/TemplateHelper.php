<?php
/**
*
*/

class TemplateHelper
{

  public static function createTemplate($templateName, stdClass $values)
  {
    $header = file_get_contents(Config::TEMPLATE_DIRECTORY . '/layouts/header.html' );
    $emptyTemplate = file_get_contents(Config::TEMPLATE_DIRECTORY . '/' . $templateName . '.html');
    $footer = file_get_contents(Config::TEMPLATE_DIRECTORY . '/layouts/footer.html');
    $result = $header . $emptyTemplate . $footer;
    foreach ($values as $key => $value) {
      // If the key is found inside the template, we replace it
      // If it's not, we do nothing to allow for greater flexibility
      if(strpos($result, '%%' . strtoupper($key) . '%%')) {
        $result = str_replace('%%' . strtoupper($key). '%%', $value, $result);
      }
    }
    return $result;
  }

}
