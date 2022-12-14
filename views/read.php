<?php 



          $connect=mysqli_connect("localhost","root","","shafin");

          if(isset($_POST['send'])){

                 $name=$_POST['name'];    
                 $email=$_POST['email'];   
                 $phone=$_POST['phone'];    
                 $dept=$_POST['dept'];
                 
                 $query="INSERT INTO insert_table(name,email,phone,dept) VALUES('$name','$email','$phone','$dept')";   

               mysqli_query($connect,$query);

               header("location:read.php");




              }

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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

 .demo{
       
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
            <h1> INPUT DATA </h1>
  <div id="demo">
      
   
  <form method="POST">
             
             <input type="text" name="name" placeholder="name"><br><br>
             <input type="email" name="email"  placeholder="email"><br><br>
             <input type="text" name="phone" placeholder="phone"><br><br>
           
           
             <select name="dept" >
                 
            <option>CSE </option>
             
            <option>BBA </option>
        
            
            <option>EEE </option>
        
       
           </select>
           <br>
           <br>
           
           <button  name="send">send</button>
       
       
             </form>    <br>
             <br>


 <table id="table">

        <th>ID</th>
        <th>name</th>
         <th>phone</th>
          <th>email</th>
         <th>dept</th>
         <th>Edit</th>
         <th>Delete </th>

     <?php 



 $read="SELECT *FROM insert_table";
 $query=mysqli_query($connect,$read);

 while($row=mysqli_fetch_array($query)){
                        ?>
  
  
 
          <tr>
      <td> <?php echo $row["Id"];?></td>
     <td><?php    echo $row["name"];?></td>
      <td><?php    echo $row["email"];?></td>
     <td> <?php    echo $row["phone"];?></td>
     <td><?php    echo $row["dept"];?> </td> 
     <td ><a target="blank" href="edit.php?idNo=<?php echo $row['Id'];?>">Edit</a></td>
     <td ><a target="blank" href="delete.php?idNo=<?php echo $row['Id'];?>">Delete</a></td>

          </tr> 

  
<?php 
   }  
 ?>

          


</table>
  </div>
     



</body>
</html>