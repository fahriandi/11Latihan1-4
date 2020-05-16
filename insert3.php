<?php

    //membuat variabel con
    //membuat koneksi database
    $con = mysqli_connect("localhost","root","");

    //pengecheckan koneksi
    if (!$con){

        //pesan error
        die('Could not connect: ' . mysqli_error());
    
    }

    //query select db
    mysqli_select_db($con, "lat_dbase");

    //query insert ke tabel tbl_mhs
    $sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
    
    //perintah untuk mengcheck insert error
    if (!mysqli_query($con,$sql))
    {
         //pesan error
        die('Error: ' . mysqli_error());
    
    }
    
   
    //menampilkan pesan bahwa record berhasil di simpan
    echo"

        <script>alert('1 record added')</script>
        1 record added    

    ";

    //menutup koneksi
    mysqli_close($con)

?> 