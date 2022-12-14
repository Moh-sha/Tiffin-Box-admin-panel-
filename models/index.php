<?php 
 $host="localhost";

 $username="root";
 $password="";
 $dbname="shafinnnn";

 $connect=mysqli_connect($host,$username,$password,$dbname);

 if($connect)
 {
   echo "connect";


 }

 else 
 {
    echo "not connected";

 }





?>