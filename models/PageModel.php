<?php

require_once('Model.php');

/**
 *
 */
class PageModel extends Model
{
  function __construct()
  {
    $this->tableName = 'pages';
    // Execute the parent constructor
    parent::__construct();
  }
}
