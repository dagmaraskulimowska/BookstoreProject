<?php

require_once '../logger.php';
require_once 'Category.php';

class ForKids extends Category
{
    
    public function __construct() {
        parent::__construct();
        $this->category = 'Dla dzieci';
      }

}
$ForKids = new ForKids();
$ForKids->displayBooks();
