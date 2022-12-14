<?php 


   $connect=mysqli_connect("localhost","root","","img_database");

  if(isset($_POST['submit']))
  {
   
       $name=$_POST['name'];
       $phone=$_POST['phone'];
       $iname=$_FILES['image']['name'];
       $tmp_name=$_FILES['image']['tmp_name'];

       $upload=move_uploaded_file($tmp_name,$iname);
     
       if($upload)
       {
          $insert="INSERT INTO table_data(name,phone,image) VALUES('$name','$phone','$iname')";
          $quary=mysqli_query($connect,$insert);
       }
          else 
         {
             echo "not seccussfull";
         }

       }


  


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload </title>
</head>
<body>
     <form method="POST" enctype="multipart/form-data">

          <input type="text" name="name" id="">
          <input type="text" name="phone" id="">
          <input type="file" name="image" id="">
         <button type="submit">submit </button>


     </form>
</body>
</html>