<?php 


$connect=mysqli_connect("localhost","root","","new_register");
$msg="";
if(isset($_POST['submit']))

{



    $name=$_POST['name'];
    $roll=$_POST['roll'];
    
    $fname=$_POST['fname'];
    
    $mname=$_POST['mname'];
    
    $date=$_POST['date'];
    
    $email=$_POST['email'];
    
    $pass=$_POST['pass'];

    $cpass=$_POST['cpass'];
    


    //checkduplicate email

    $email_check="SELECT * FROM register WHERE email='$email'";
    $email_query=mysqli_query($connect,$email_check);
    $num_row=mysqli_num_rows($email_query);
    if($num_row>0)
    {
        $msg="email is already exist,try again";
    }
    else 
    {
         //check password and confirm password
         if($pass == $cpass)
         { 
                //check_special_characters
                $specialChars= preg_match('@[^\w]@',$pass);
                if(!$specialChars || strlen($pass) == 8  || strlen($pass)<8)
                {
                    $msg ="password required cannot match";
                }else{

                        //insert_query
                     $insert="INSERT INTO register(name,Roll,fname,mname,d_birth,email,pass,c_pass) VALUES ('$name','$roll','$fname',' $mname','$date','$email','$pass','$cpass')";
                        $query=mysqli_query($connect,$insert);
                        if($query)
                        {
                            $msg="register success";
                            header("Location:newlogin.php");
                        }
                        else 
                        {
                            $msg="register failure";
                        }
                    } 
               
                    
        
          }
         else 
         {
            $msg="password and confirm password doesnot match";
           }
         }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1>Registration Form </h1>
    <div class="container">
 <form action="" method="POST">

  <div class="left_div">

         <span>Name</span>
         <div>
         <input type="text" name="name" id=""><br><br>
         </div>
         <span>Roll</span>
         <div>
         <input type="text" name="roll" id=""><br><br>
         </div>
         <span>Father Name</span>
         <div>
         <input type="text" name="fname" id=""><br><br>
         </div>
         <span>Mother Name</span>
         <div>
         <input type="text" name="mname" id=""><br><br>
         </div>
         
          
          
  

  </div>
  
  <div class="left_div">
        
  <span>Date-of-birthday</span>
         <div>
         <input type="date" name="date" id=""><br><br>
         </div>
         <span>email</span>
         <div>
         <input type="text" name="email" id=""><br><br>
         </div>
         <span>Password</span>
         <div>
         <input type="text" name="pass" id=""><br><br>
         </div>
         <span>Confirm password</span>
         <div>
         <input type="text" name="cpass" id=""><br><br>
         </div>
         
         <div class="btn">
      
          <button id="submit" type="submit" name="submit">Submit</button>

         </div>
         <div id="center">
           <a id="log" href="newlogin.php">Login</a>

         </div>

             

         <h4 style="color:blue;border:1px solid blue;padding:5px;text-align:center "><?php echo $msg ?></h4>
  
        </div>







 </form>
      

    </div>



</body>
</html>