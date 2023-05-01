<?php

require_once '../logger.php';
require_once 'Category.php';

class CommonLiterature extends Category
{
    
    public function __construct() {
        parent::__construct();
        $this->category = 'Obyczajowa';
      }

}
$CommonLiterature = new CommonLiterature();
$CommonLiterature->displayBooks();
