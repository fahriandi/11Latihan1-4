<?php 

    //membuat vaiabel name server
    $serveName = 'localhost';

    //membuat variabel username database
    $db_userName = 'root';
    //membuat variabel password database
    $db_pass = '';
   
    $link = mysqli_connect("$serveName","$db_userName","$db_pass")or die ( " Not able to connect to server "); 

    // Check connection
    if ($link){
        
        //tampilkan pesan berupa js alert
        echo "
            <script>alert('ok....koneksi berhasil');</script>
            ok....koneksi berhasil
        "; 
    }

?>