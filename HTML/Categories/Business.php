<?php

require_once '../logger.php';
require_once 'Category.php';

class Business extends Category
{
    
    public function __construct() {
        parent::__construct();
        $this->category = 'Biznes';
      }

}
$Business = new Business();
$Business->displayBooks();
