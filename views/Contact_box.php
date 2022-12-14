<?php 
        session_start();
         
        @$username=$_POST["name"];

         @$email =$_POST["email"];
         @$subject=$_POST["subject"];
         @$message=$_POST["message"];
         
         $file=" ".$username."|".$email."|".$subject."|".$message."\r\n";
         $contact=fopen('contact.txt','a');
         fwrite($contact,$file);

         echo "Successfully ";
        
         echo "Thank you";
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Box</title>

 <style> a{
        font-size: large;
        color: tomato;
        text-decoration: none;
      }

      .body{
               text-align: center;
               font-family: Tahoma, Verdana, Arial, sans-serif;
               font-size: large;
               color: #222;
               background-color: #f7f7f7;

      }
       </style>

</head>
<body>

 <br> 

 <a href="home.php">home</a>

 


</body>
</html>