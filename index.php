<?php
$con=mysqli_connect("localhost","root","","cimage");
$msg="";
if($con)
{
    if(isset($_POST['sub']))
    {
        if(!empty($_REQUEST['uname']  && !empty($_REQUEST['DOB'] && !empty($_REQUEST['email'] && !empty($_REQUEST['password'])))))
        {
            $uname=$_REQUEST['uname'];
            $DOB=$_REQUEST['DOB'];
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];
            $query="INSERT into sign_up(uname,DOB,email,password) values ('$uname','$DOB','$email','$password')";
            $rs=mysqli_query($con,$query);
            if($rs){
            $msg = "Record added successfully.";
            }
            else{
                $msg = "Failed to add record";
            }

        }
    }
    if(isset($_POST['sub1']))
    {
        if(!empty($_REQUEST['email1'] && !empty($_REQUEST['password1'])))
        {
            $email=$_REQUEST['email1'];
            $password=$_REQUEST['password1'];
            $query="SELECT * FROM sign_up where email='$email' AND password = '$password'";
            $rs=mysqli_query($con,$query);
            if($rs){
                $row = mysqli_num_rows($rs);
                if($row)
                {
                    header("location: instahtml.html");
                }
                else{
                    $msg = "Invalid Email or Password";
                }
            }
            else{
                $msg = "Failed to fetch record";
            }

        }
    }
}


?>

<!DOCTYPE html>
 <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Sign Up || Log In</title>
</head>
<body>
<div class="head"><p style="color:red;"><?php echo $msg;?></p></div>
    <div class="container" id="container">
        <!-- header -->
        <div class="form-container sign-up-container">
            
            <form action="#" method="POST">
                <h1>Create An Account</h1>
                <div class="social-container">
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <span> use your email for registration </span>
                <input type="text" placeholder="Name" name="uname">
                <input type="date" placeholder="Date Of Birth" name="DOB">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password"><br>
                <!-- <input type="submit"name="sub" value="Sign Up"> -->
                
                <button type="submit" name="sub">Sign Up</button>
                <!-- <button>Sign Up</button> -->
            </form>
        </div>
        <div class="form-container sign-in-container"> 
            <form action="#" method="post">
                <h1>Log In </h1>
                <div class="social-container">
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-github"></i> 
                    </a>
                </div>
                <span>Login to your account</span>
                <input type="email" placeholder="Email" name="email1">
                <input type="password" placeholder="Password" name="password1"><br>
                <a href="#">Forget your password</a>

                <!-- <button class="log_in">
                    <input type="submit"name="sub1" value="Log In">
                </button> -->
                <button type="submit" name="sub1">Log In</button>


                <!-- <button>Sign In</button> -->
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Have Already Account</h1>
                    <p>to keep connect with us please login with your account here!</p>
                    <button class="ghost" id="signIn">Log In</button>
                </div>
                <div class="overlay-panel overlay-right"> 
                    <h1>Create Your Account</h1>
                    <p>Enter your personal detail and start journey with us.</p> 
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div> 
        </div>

    </div>
    <script src="./index.js"></script>
    
    </body>
    </html>