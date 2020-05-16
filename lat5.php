<?php

    //membuat koneksi
    $link = mysqli_connect("localhost","root","");
    
    mysqli_select_db($link, "lat_dbase");

    //membuat query konek ke db dan untuk menampilkan data pada table tbl_mhs
    $hasil = mysqli_query($link, "select * from tbl_mhs")or die("ERROR DEL SELECT");
    

    if($hasil){

        //tampilkan pesan js alert
        echo"

            <script>alert('Berhasil Menampilkan data dari tabel (tbl_mhs)')</script>
            

        ";

    }


    //looping menampilkan data pada table tbl_mhs
    While($data = mysqli_fetch_row($hasil)){

        //menampilkan
        echo "$data[0] $data[1] $data[2]<br>";
    
    }

?>