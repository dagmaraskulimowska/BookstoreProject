<?php

require_once '../logger.php';
require_once 'Category.php';

class ThrillerCriminal extends Category
{

  public function __construct()
  {
    parent::__construct();
    $this->category = 'Thriller/Kryminał';
  }
}
$ThrillerCriminal = new ThrillerCriminal();
$ThrillerCriminal->displayBooks();
