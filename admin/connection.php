<?php

    //Session start
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    //Creating the connection between the database and the website
    //Getting the database credientials
    define('SITEURL', 'https://admin.wecycle.travel/');
    define('LOCALHOST', 'localhost');   //Database located server
    define('DB_USERNAME', 'bimbiave_orisoft');           //username to enter db
    define('DB_PASSWORD', 'KG_hMzM;v.si9(8o');               //pwrd to enter db
    define('DB_NAME', 'bimbiave_wecycle');           //database name what we use to store data
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);// or die(myqli_error());

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
?>