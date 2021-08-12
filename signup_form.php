<?php
session_start();
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
    <title>Signup here</title>
</head>

<body>
    <?php
    include 'dbcon.php';
    if(isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['name']);
        $bname = mysqli_real_escape_string($con, $_POST['bname']);
        $mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $token = bin2hex(random_bytes(15));


        $emailquery = "select * from registration where email = '$email'";
        $query = mysqli_query($con, $emailquery);
        $emailcount = mysqli_num_rows($query);

        if($emailcount > 0) {
            echo "email already exists";
        } else {
            if($password === $cpassword) {
                $insertquery = "insert into registration(name, bname, mobileNo, email, password, cpassword, token, status) values ('$username', '$bname', '$mobileno', '$email','$pass','$cpass', '$token', 'inactive')";
                $iquery = mysqli_query($con,$insertquery);
                if($iquery) {
                    $subject = "Email Activation";
                    $body = "Hi, $username. Click here to activate your account
                    http://localhost/UseDailyPayMonthly/activate.php?token=$token";
                    $sender_email = "From: pankaj.kumar18@vit.edu";
                    if(mail($email, $subject, $body, $sender_email)) {
                        $_SESSION['msg']="check your mail to activate your account $email";
                        header('location:login.php');
                    } else {
                            echo "Email sending failed...";
                        }
                    } else {
                    ?>
                        <script>
                            alert("No insertion of data");
                        </script>
                    <?php
                    }
            }else {
                ?>
                    <script>
                        alert("Password are not matching");
                    </script>
                <?php
            }
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="second">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Signup</h1>
                            </div>
                        </div>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Business Name</label>
                                <input type="text" name="bname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mobile No.</label>
                                <input type="number" name="mobileno" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Mobile No.">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" name="cpassword" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-12 text-center mb-3">
                                <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Signup</button>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <p class="text-center"><a href="login.php" id="signin">Already have an account?</a></p>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/loginscript.js"></script>
</body>

</html>