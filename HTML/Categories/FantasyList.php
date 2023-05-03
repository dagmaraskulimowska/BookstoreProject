<?php

require_once '../logger.php';
require_once 'Category.php';

class FantasyList extends Category
{

  public function __construct()
  {
    parent::__construct();
    $this->category = 'Fantastyka';
  }
}
$FantasyList = new FantasyList();
$FantasyList->displayBooks();
