<?php 
    $page = isset($_GET["page"]) ? $_GET["page"] : 1;

    // To set number of records per page
    $per_page = 5;

    // To calcute the quert LIMIT clause
    $from_record_num = ($per_page * $page) - $per_page;
?>