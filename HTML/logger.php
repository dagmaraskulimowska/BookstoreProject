<?php
  $log_file = 'C:\xampp\htdocs\Workspace\BookstoreProject/log.txt'; 
  $login = isset($_SESSION['login']) ? $_SESSION['login'] : "guest";
  $page_name = $_SERVER['REQUEST_URI']; 
  $time_stamp = date('Y-m-d H:i:s');

  
  $log_data = "$login - $time_stamp - $page_name" . PHP_EOL;

  
  file_put_contents($log_file, $log_data, FILE_APPEND);
