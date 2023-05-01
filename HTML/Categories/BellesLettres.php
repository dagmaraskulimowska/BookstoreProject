<?php

require_once '../logger.php';
require_once 'Category.php';

class BellesLettres extends Category
{
    
    public function __construct() {
        parent::__construct();
        $this->category = 'Piękna';
      }

}
$BellesLettres = new BellesLettres();
$BellesLettres->displayBooks();
