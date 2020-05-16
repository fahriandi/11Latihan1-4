<?php

    //membuat koneksi ke database
    $con = mysqli_connect("localhost","root","");

    //pengecheckan error pada koneksi database
    if (!$con){

        die('Could not connect: ' . mysqli_error());
    
    }

    //query mengunakan database
    mysqli_select_db($con,"lat_dbase");

    //query insert data ke tbl_mhs
    $input = mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Karina', 'Suwandi', '29'), ('Glenn', 'Gandari', '32')");

    if($input){

        //tampilkan pesan js alert
        echo"

            <script>alert('Berhasil memasukan data ke tabel (tbl_mhs)')</script>
            Berhasil memasukan data ke tabel (tbl_mhs)

        ";

    }

    //close koneksi
    mysqli_close($con);

?>