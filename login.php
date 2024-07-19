<?php
session_start();
include_once('partials/_dbconnect.php');

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
                            <h1 class="text-center text-white mb-4">SignIn As</h1>
                            <form>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <a href="login-client.php" class="btn btn-primary btn-block border-0 py-3">Client</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <a href="login-lawyer.php" class="btn btn-primary btn-block border-0 py-3">Lawyer</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <a href="login-admin.php" class="btn btn-primary btn-block border-0 py-3">Admin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Not SignedUp? </p><a href="register.html" style="display: inline;">SignUp</a>
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