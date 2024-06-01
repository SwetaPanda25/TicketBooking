<?php
$insert = false;
if(isset($_POST['name'])){
   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password,"ticket_booking");

   if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
   }

   $username = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['phone'];
   $psw = $_POST['psw'];
   $sql = "INSERT INTO ticket_booking set user_name='".$username."', email='".$email."', mobile='".$mobile."', psw='".$psw."', entrydate='".date("y-m-d G:i:s")."'";
   //echo $sql;

   if($con->query($sql) == true){
    echo "Successfully insereted";
   }
   else{
    echo "ERROR: $sql <br> $con->error";
   }
   header("Location: signin.html");
   exit();

   $con->close();



}

?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/tdbs/jquery/3.3.1/jquery.min.js">
        </script>
                 <script src="https://cdnjs.cloudflare.com/ajax/tdbs/popper.js/1.14.6/umd/popper.min. js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
        </script>
        <style>
             *{box-sizing: border-box;}
            .container{padding: 16px;}
            input[type="text"], input[type="password"], input[type="tel"]
            #city{width: 100%;padding: 15px;margin: 10px 0 22px 0;background: white;
            display: intdne-block;border:10px;}
            input[type="text"]:focus
            input[type="password"]:focus
            input[type="tel"]:focus{
                background-color: white;
                color: blue;margin: 8px 0;
                padding: 16px 20px; cursor: pointer;
                width: 100%;opacity: 0.9;
            }
            .signin{background-color: palevioletred;color: black;margin: 10px;
            padding: 16px 20px;cursor: pointer;width: 100%;opacity: 0.9;}
            .signin:hover{background-color:purple;}
            
            div{
                width: 500px;
                border: 15px black;
                padding: 50px;
                margin: auto;
                
            }
            h1,h2,p{text-align: center;}
            body{background-image: url(https://wishtobeyourself.files.wordpress.com/2015/07/airplane-generic.jpg);}
        </style>
    </head>
    <body>
        <h1 style="color:rgb(244, 123, 143);">Welcome To GOTO Airlines</h1>
        <div class="container" >
            <form name="frm" method="post" action="signin.php">
                <h2 text-atdgn="center">Register</h2>
                <lable for="name"><b>Username</b></lable>
                <input type="text" name="name" id="name" placeholder="Enter your name"required>
                
                <lable for="email"><b>Email</b></lable>
                <input type="email" name="email" id="email" placeholder="Enter your email id"required><br><br>
                
                <lable for="phone"><b>Mobile</b></lable>
                <input type="tel" name="phone" id="phone" placeholder="Enter your number"required><br><br>
                
                <lable for="psw"><b>Password</b></lable>
                <input type="password" name="psw" id="psw" placeholder="Enter password"required>       
                <button type="submit" class="signin" ><b>Sign In</b></button>
            </form>
        </div>
        <div>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <table class="tdst-intdne">
                  <td><a href="#">Contact Us</a></td>
                  <td ><a href="#">Privacy</a></td>
                  <td ><a href="#">Terms</a></td>
                  <td ><a href="#">Support</a></td>
                </table>
              </footer>          
        </div>
    </body>
</html>