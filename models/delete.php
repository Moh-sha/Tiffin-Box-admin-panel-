<?php 
   

   $connect=mysqli_connect("localhost","root","","shafin");
   $id=$_GET["idNo"];

   $del = "DELETE FROM insert_table WHERE Id=$id";

   $query=mysqli_query($connect,$del);

   if($query)
   {
    echo "<script> alter('Suceessfully delete')</script>";

   }
else 
{

    echo "<script> alter('Suceessfully delete')</script>";
}

 header("location:add_rider.php");

?>  