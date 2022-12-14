<?php 
   

   $connect=mysqli_connect("localhost","root","","shafin_r");
   $id=$_GET["idNo"];

   $del = "DELETE FROM table_value WHERE id=$id";

   $query=mysqli_query($connect,$del);

   if($query)
   {
    echo "<script> alter('Suceessfully delete')</script>";

   }
else 
{

    echo "<script> alter('Suceessfully delete')</script>";
}

 header("location:add_resturent.php");

?>  