
<?php 
        session_start();
         
        @$username=$_POST["name"];

         @$email =$_POST["email"];
         @$subject=$_POST["subject"];
         @$message=$_POST["message"];
         
         $file=" ".$username."|".$email."|".$subject."|".$message."\r\n";
         $contact=fopen('contact.txt','a');
         fwrite($contact,$file);
        
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/contact.css">
    <title>Contact</title>
    
  </head>
  <body>
    <h1> Cotact Send Massage</h1>
    <form name="myForm" action="contact_box.php" method="post" onsubmit="return validateForm()">
      <fieldset>
        <label for="name">Name :</label>
        <input type="text" name="fname" id="" />
        <br />
        <br />
        <script>
          function validateForm() {
       let x = document.forms["myForm"]["fname"].value;
        if (x == "") {
          alert("Name must be filled out");
           return false;
              }
          }
        </script>
        <label for="email">Email :</label>
        <input type="email" name="email" id="" />
        <br />
        <br />
        
      
        <label for="subject">Submit :</label>
        <input type="text" name="subject" id="" />
             
        <br />
        <br />
       
        <label for="message">Message :</label>
        <input type="textarea" name="message" id="" />
        <br />
        <br />
       
        <input type="submit" value="Submit" /><span> </span>
        <br>
        <br> 
        <a href="../views/home.php">Home </a>
      </fieldset>
    </form>
  </body>
</html>
