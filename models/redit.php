<?php

  
   $connect=mysqli_connect("localhost","root","","shafin_r");
   $id=$_GET["idNo"];
   
   if(isset($_POST['edit'])){

    $name=$_POST['name'];    
    $email=$_POST['email'];   
    $phone=$_POST['phone'];    
    $dept=$_POST['dept'];
   
     $update="UPDATE table_value SET 
     name= '$name', email= '$email', phone= '$phone', dept= '$dept' WHERE id= '$id'";

     $query=mysqli_query($connect,$update);
   }
     


     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit database </title>


    <style>

button{


           background-color: lightblue;
           width:90%;
           padding:10px 20px ;
           colour :white;
           font-size: 1.2rem;

}

input{
 border : 2px solid green;
 width :90%;
 padding:8px ;


}
select{

border : 2px solid green;
 width :90%;
 padding:8px ;
}
h1{
   background-color: lightblue;
   padding:10px;
   color:white;
   text-align:center;

}

.container{
  
width: 500px;
height: 400px;
text-align:center;
margin: 0 auto;

}

table,th,td{

border: 1px solid green;
border-collapse: collapse;


}


</style>
</head>
<body>
     
<h1>Edit </h1>
<div class="container">
      
   
  <form  method="POST">
             
             <input type="text" name="name" placeholder="name"><br><br>
             <input type="email" name="email"  placeholder="email"><br><br>
             <input type="text" name="phone" placeholder="phone"><br><br>
           
           
             <select name="dept" >
                 
            <option>single </option>
             
            <option>married</option>

        
       
           </select>
           <br>
           <br>
           
           <button  name="edit">send</button>
           <br>
           <br>
       
            

             </form> 
             <a href="add_resturent.php">Add Resturent</a>
</div>

</body>
</html>