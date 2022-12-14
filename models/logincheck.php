<?php

   session_start();
   $connect=mysqli_connect("localhost","root","","new_register");

 

   $msg="";

   if(isset($_POST['login']))
{
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      
      $select="SELECT * FROM register WHERE email='$email' AND pass='$pass' ";

      $ex=mysqli_query($connect,$select);
      $row=mysqli_fetch_array($ex);
      if($email== "" || $pass== "")
      { 
        echo "error";
        header("Location:newlogin.php");
       

        

      }
      else if($row){
             
        header("Location:../views/home.php");


      }
      else 
      {
       echo "log in failed";
      
      }




}


?>