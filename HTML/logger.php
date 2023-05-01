<?php
  $log_file = 'C:/xampp/htdocs/Workspace/BookstoreProject/log.txt'; // nazwa pliku dziennika
  $ip_address = $_SERVER['REMOTE_ADDR']; // adres IP użytkownika
  $page_name = $_SERVER['REQUEST_URI']; // nazwa aktualnie przeglądanej strony
  $time_stamp = date('Y-m-d H:i:s'); // czas zdarzenia nawigacyjnego

  // dane zdarzenia nawigacyjnego
  $log_data = "$ip_address - $time_stamp - $page_name" . PHP_EOL;

  // zapisywanie informacji do pliku dziennika
  file_put_contents($log_file, $log_data, FILE_APPEND);
?>