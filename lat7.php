<?php

    //membuat variabel $link 
    //dan membuat koneksi kedatabase
    $link = mysqli_connect("localhost","root","");

    //select database
    mysqli_select_db($link, "lat_dbase");

    //membuat vairable hasil
    //membuat query menampilkan tbl mhs
    $hasil = mysqli_query($link, "select * from tbl_mhs")or die("ERROR DEL SELECT");

    //membuat variabel $hit
    //dan membuat query untuk menghitung baris
    $hit = mysqli_num_rows($hasil);

    if($hit){

        //tampilkan pesan js alert
        //menampilkan jumlah record
        echo"

            <script>alert('jumlah record $hit')</script>
            jumlah record $hit
            

        ";

    }

?>