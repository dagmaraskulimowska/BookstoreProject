<?php

require_once '../logger.php';
require_once 'Category.php';

class Scientific extends Category
{
    
    public function __construct() {
        parent::__construct();
        $this->category = 'Naukowe';
      }

}
$Scientific = new Scientific();
$Scientific->displayBooks();
