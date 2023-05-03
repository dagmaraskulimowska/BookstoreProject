<?php

require_once '../logger.php';
require_once 'Category.php';

class Horror extends Category
{

  public function __construct()
  {
    parent::__construct();
    $this->category = 'Horror';
  }
}
$Horror = new Horror();
$Horror->displayBooks();
