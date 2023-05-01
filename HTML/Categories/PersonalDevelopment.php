<?php

require_once '../logger.php';
require_once 'Category.php';

class PersonalDevelopment extends Category
{
    
    public function __construct() {
        parent::__construct();
        $this->category = 'Rozwój osobisty';
      }

}
$PersonalDevelopment = new PersonalDevelopment();
$PersonalDevelopment->displayBooks();
