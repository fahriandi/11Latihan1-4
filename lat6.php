<?php

    //membuat variabel $link 
    //dan membuat koneksi kedatabase
    $link = mysqli_connect("localhost","root","");

    //select database
    mysqli_select_db($link, "lat_dbase");

    //membuat vairable hasil
    //membuat query menampilkan tbl mhs
    $hasil = mysqli_query($link, "select * from tbl_mhs")or die("ERROR DEL SELECT");

    if($hasil){

        //tampilkan pesan js alert
        echo"

            <script>alert('Berhasil Menampilkan data dari tabel (tbl_mhs)')</script>
            

        ";

    }

    //looping dan menampilkan data berdasarkan Firstname dan Lastname dan age
    While($data=mysqli_fetch_array($hasil)){

        echo "$data[FirstName] $data[LastName] $data[Age]<br>";
    
    }

?>