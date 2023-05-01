<?php

require_once '../logger.php';
require_once 'Category.php';

class NonFiction extends Category
{
    
    public function __construct() {
        parent::__construct();
        $this->category = 'Literatura faktu';
      }

}
$NonFiction = new NonFiction();
$NonFiction->displayBooks();
