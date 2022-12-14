<?php 



          $connect=mysqli_connect("localhost","root","","shafin");

          if(isset($_POST['send'])){

                 $name=$_POST['name'];    
                 $email=$_POST['email'];   
                 $phone=$_POST['phone'];    
                 $dept=$_POST['dept'];
                 
                 //email validation 

                  $email_select="SELECT *FROM insert_table where email='$email' ";
                  
                  $exu=mysqli_query($connect,$email_select);

                   $count=mysqli_num_rows($exu);

                   if($count>0)
                   {
                         echo "Duplicate email address";

                   }
                  else {

                    $query="INSERT INTO insert_table(name,email,phone,dept) VALUES('$name','$email','$phone','$dept')";   

                    mysqli_query($connect,$query);
     


                  }

                



              }
















?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form method="POST">
             
      <input type="text" name="name" placeholder="name"><br><br>
      <input type="email" name="email"  placeholder="email"><br><br>
      <input type="text" name="phone" placeholder="phone"><br><br>
    
    
      <select name="dept" >
          
     <option>School  </option>
      
     <option>college </option>
 
     
     <option>University </option>
 

    </select>
    <br>
    <br>
    
    <button  name="send">send</button>


      </form>    



</body>
</html>