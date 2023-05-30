<?php
    session_start();

    define('SITEURL','http://localhost/Bookstore/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    Define('DB_PASSWORD','');
    define('DB_NAME','bookstore');

    //3. Execute Query and Save Data in Database
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME); //SElecting Database

?> 