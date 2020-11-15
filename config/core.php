<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $home_url = 'http://mytreasure.local/';
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $records_per_page = 5;
    $from_record__num = ($records_per_page * $page) - $records_per_page;

?>