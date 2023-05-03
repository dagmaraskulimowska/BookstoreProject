<?php

require_once '../logger.php';
require_once 'Category.php';

class Romance extends Category
{

  public function __construct()
  {
    parent::__construct();
    $this->category = 'Romans';
  }
}
$Romance = new Romance();
$Romance->displayBooks();
