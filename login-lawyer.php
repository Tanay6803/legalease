<?php
session_start();
include_once('partials/_dbconnect.php');
$password_error=null;
$email_error=null;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $password=$_POST['password'];
        $sql="SELECT * FROM `lawyer` WHERE `lawyer`.`email`='$email'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num==1)
        {
            while ($row=mysqli_fetch_assoc($result)) {
                if($password==$row['password'])
                {
                        $_SESSION['email']=$row['email'];
                        $_SESSION['Name']=$row['fname'];
                        header("refresh:1; url=lawyer-home.php");
                    
                }
                else{
                    //echo "Incorrect Password";
                    $password_error="*Incorrect Password";
                }
            }
        }
        else{
            $email_error="*User Not Registered";
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LegalEase/register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="legaleaselogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .error{
            color : red;
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <?php 
    include_once('partials/_header.php');
    ?>
    <!-- Header End -->

<!-- Registration Form Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <img src="img/legaleaselogo.png" alt="logo" style="width: 100%; max-width: 85px; height: auto; display: block; margin: 0 auto;">
                            <h1 class="text-center text-white mb-4">SignIn</h1>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required" name="email" />
                                    <span class="error"><?php echo $email_error  ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control border-0 p-4" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one lowercase and one uppercase letter, and be at least 8 characters long." required="required" name="password" />
                                    <span class="error"><?php echo $password_error  ?></span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">SignIn</button>
                                </div>
                                <div class="form-group" style="display: flex; justify-content: space-between;">
                                    <span><a href="forgotpswd.php">Forgot Password?</a></span>
                                </div>                                
                                <div class="form-group">
                                    <p style="display: inline;">Not SignedUp? </p><a href="register.php" style="display: inline;">SignUp</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Registration Form End -->

<!-- Footer Start -->
<?php
        include_once('partials/_footer.php');
    ?>
    <!-- Footer End -->

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/tempusdominus/js/moment.min.js"></script>
     <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
     <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
 
     <!-- Contact Javascript File -->
     <script src="mail/jqBootstrapValidation.min.js"></script>
     <script src="mail/contact.js"></script>
 
     <!-- Template Javascript -->
     <script src="js/main.js"></script>
</body>
</html>