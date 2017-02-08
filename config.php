<?php
    
        $host="localhost";
        $user="root";
        $password="";
        $port="85";
        $database="blood_db";
        $con=mysql_connect($host, $user, $password,$port)
        or die("Cannot connect");
        
    @mysql_select_db($database,$con);
   
?>
