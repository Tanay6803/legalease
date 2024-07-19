<?php
session_start();
include_once('partials/_dbconnect.php');
$email=$_SESSION['email'];
$sql="SELECT * FROM `client` WHERE `email`='$email'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error : ".mysqli_error($conn);
}
$row=mysqli_fetch_assoc($result);
if(isset($_GET['email']))
{
    $email=$_GET['email'];
    $sql="SELECT * FROM `lawyer` WHERE `email`='$email'";
    $result=mysqli_query($conn,$sql);
    $row2=mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book an Appointment</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <?php 
    include_once('partials/_header.php');
    ?>
    <!-- Header End -->

    <!-- Appointment Page Start -->
    
    <div class="container mt-5" style="color:black; text-align: center;">
        <h2 class="mb-4">Book an Appointment</h2>
        <!-- <div class="container-fluid py-5"> -->
            <!-- <div class="container py-5"> -->
                <div class="bg-appointment rounded">
        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
        <form method="post" action="payment.php?email=<?php echo $email; ?>">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" value="<?php echo $row['fname']." ".$row['lname']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email"  value="<?php echo $row['email']; ?>" class="form-control" id="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" value="<?php echo $row['phonenumber']; ?>" id="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date">Preferred Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="time">Preferred Time</label>
                    <input type="time" class="form-control" name="time" id="date" required>
                </div>
            </div>
            <div class="form-group">
                <label for="message">About your case(In Detail)</label>
                <textarea class="form-control" id="message" rows="3" name="info" placeholder="Enter any additional information"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Appointment</button>
        </form>
    </div>
    </div>
    </div>
    <!-- Appointment Page End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-0 px-sm-0 px-md-0">
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">LegalEase</a>. All Rights Reserved.</p>
            </div> 
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

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
