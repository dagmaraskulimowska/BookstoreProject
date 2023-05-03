<?php

require_once '../logger.php';
require_once 'Category.php';

class Historical extends Category
{

  public function __construct()
  {
    parent::__construct();
    $this->category = 'Historyczne';
  }
}
$Historical = new Historical();
$Historical->displayBooks();
