<?php
    require_once 'model/dbconnect.php';
    function all_books() {
       return getResult("SELECT * FROM books");
    }
?>