<?php
session_start();
include_once('partials/_dbconnect.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];

    $sql="INSERT INTO `client`(`fname`, `lname`, `email`, `DOB`, `Pincode`, `address`, `city`, `state`, `phonenumber`, `password`) VALUES ('$fname','$lname','$email','$dob',$pincode,'$address','$city','$state','$phone','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("refresh:1; url=login-client.php");
    }
    else{
        echo "Error : ".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LegalEase/register-client</title>
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
                            <h1 class="text-center text-white mb-4">SignUp</h1>
                            <form id="clientRegistrationForm" action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="First Name" required="required"  name="fname" title="Enter your first name"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Last Name" required="required" name="lname"title="Enter your last name"/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Email" name="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="date" class="form-control border-0 p-4" placeholder="DoB" name="dob" tilte="Date of Birth" required="required" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control border-0 p-4" placeholder="Pincode" name="pincode" pattern="[0-9]{6}"required="required" />
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Address" name="address" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control border-0 p-4" placeholder="City" name="city" required="required" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control border-0 p-4" placeholder="State" name="state" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control border-0 p-4" placeholder="Phone Number" name="phone" required="required" pattern="[0-9]{10}"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control border-0 p-4" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one lowercase and one uppercase letter, and be at least 8 characters long." name="password" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" id="confirmPassword" class="form-control border-0 p-4" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one lowercase and one uppercase letter, and be at least 8 characters long." required="required" oninput="checkPasswordMatch()" />
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">SignUp</button>
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Already Registered? </p><a href="login.php" style="display: inline;">SignIn</a>
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

     <!-- password check javascript -->
     <script>
        function checkPasswordMatch() {
            var password = document.getElementById("password");
            var confirmPassword = document.getElementById("confirmPassword");
    
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords do not match");
            } else {
                confirmPassword.setCustomValidity("");
            }
        }
    </script>
</body>
</html>