<?php 
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link type="stylesheet" href="css/loginStyle.css">
   <title>Login</title>
</head>

<body>
      <?php
        include 'dbcon.php';
        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $email_search = "select * from registration where email = '$email' and status ='active'";
            $query = mysqli_query($con,$email_search);
            
            $email_count = mysqli_num_rows($query);

            if($email_count) {
               $email_pass = mysqli_fetch_assoc($query);
               $db_pass=$email_pass['password'];
               $_SESSION['username'] = $email_pass['name'];
               $pass_decode=password_verify($password, $db_pass);
               if($pass_decode) {
                   if(isset($_POST['rememberme'])) {
                       setcookie('emailcookie',$email,time()+86400);
                       setcookie('passwordcookie',$password,time()+86400);
                       header('location:home.php');
                   } else {
                       header('location:home.php');
                   }
                   echo "login successful";
                   ?>
                       <script>
                           location.replace('home.php');
                       </script>
                   <?php
               } else {
                   echo "password Incorrect";
               }
           } else {
               echo "Invalid Email";
           }
       }
   ?>
   <div>
        <p> 
        <?php
            if(isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
            } else {
                echo $_SESSION['msg'] = "You are logged Out. Please login again !";
            }
        ?>
        </p>
    </div>
   <div class="container">
      <div class="row">
         <div class="col-md-5 mx-auto">
            <div id="first">
               <div class="myform form ">
                  <div class="logo mb-3">
                     <div class="col-md-12 text-center">
                        <h1>Login</h1>
                     </div>
                  </div>
                  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="login">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php if(isset($_COOKIE['emailcookie'])) {
                           echo $_COOKIE['emailcookie'];
                        } ?>">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" value="<?php if(isset      ($_COOKIE['passwordcookie'])) {
                        echo $_COOKIE['passwordcookie'];
                        } ?>">
                     </div>
                     <div class="form-group checkbox-margin">
                        <input class="form-check-input" type="checkbox" name="rememberme" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                           Remember me
                        </label>
                     </div>
                     <div class="col-md-12 text-center ">
                        <button type="submit" name="login" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                     </div>
                     <!-- <div class="col-md-12 ">
                        <div class="login-or">
                           <hr class="hr-or">
                           <span class="span-or">or</span>
                        </div>
                     </div> -->
                     <!-- <div class="col-md-12 mb-3">
                        <p class="text-center">
                           <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                              </i> Signup using Google
                           </a>
                        </p>
                     </div> -->
                     <div class="form-group">
                        <p class="text-center">Don't have account? <a href="signup_form.php" id="signup">Sign up here</a></p>
                     </div>
                     <div class="form-group">
                        <p class="text-center"><a href="recover_email.php" id="signup">Forgot Password ?</a></p>
                     </div>
                  </form>

               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="js/loginscript.js"></script>
</body>

</html>