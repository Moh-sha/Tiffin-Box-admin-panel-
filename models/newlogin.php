<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

         .contain{

             background:lightblue;
             height:400px;
             width:600px;
             margin:auto;
            text-align:center;
            box-shadow:10px 10px 20px black;




         }

          h1{
            
            text-align:center;
            color:blue;
            }

            input{

              width:90%;
              padding:10px;


            }

            button{
           width:95%;
           padding:10px;
           background:red;
           color:white;
           font: size 1.4rem;
           box-shadow:3px 4px 10px black;


            }

 a{
      
   colour:lightblue;
   font-weight:bold;
 


 }


</style>


</head>
<body>
     <form action="logincheck.php" method="POST">

     <div class="contain">

    
     <h1>Log In</h1>



 <input type="email" name="email" id="" placeholder="Email"><br><br>
 <input type="password" name="pass" id="" placeholder="Password" ><br><br>
 
 <button type="submit" name="login">Login</button><br><br>
 <a href="reg.php">Registration</a>

     </form>





</div>

</body>
</html>