<?php

    //starat session,
    session_start();




    //create constanst for non reapeting values
    
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');       
    define('DB_PASSWORD','');       # use define we can oparate like we use veraibles;
    define('DB_NAME', 'a.p.m.s');

    


            // execute quary and save in database;
        $conn =mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD, DB_NAME) or die(mysqli_error($conn)); //database connction


        $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn)); //selectiing databse
        if ($db_select) {
          //echo"databse is ok";
        }
