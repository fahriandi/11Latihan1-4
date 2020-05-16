<?php

    //konek ke databse
    $link = mysqli_connect("localhost","root","")or die ( " Not able to connect to server "); 

    //membuat penamaan database
    $dbname = "lat_dbase";

    //$cek adalah query untuk membuat database baru
    $cek = mysqli_query($link, "CREATE DATABASE $dbname") or die("Couldn't Create Database:$dbname");

    //pengcheckan apakah berhasil atau tidak variabel $cek
    if($cek){

        //tampilkan pesan berupa js alert
        echo "
            <script>alert('Database $dbname berhasil dibuat')</script>
            Database $dbname berhasil dibuat
        ";
    
    }
    
?> 