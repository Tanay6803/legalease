<?php
session_start();
include_once('partials/_dbconnect.php');
if(isset($_GET['email']))
{
    $email=$_GET['email'];
    $sql="SELECT * FROM `lawyer` WHERE `email`='$email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LegalEase/home</title>
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

    <!-- Additional styles for the lawyer's landing page -->
    <style>
        /* body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f9fa;
            color: #495057;
        } */

        .lawyer-page {
            display: flex;
            padding: 20px 0px;
            text-align: center;
        }

        .lawyer-info {
            width: 35%;
            padding-right: 20px;
        }

        .lawyer-details {
            width: 65%;
            text-align: left;
        }

        .lawyer-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        h1, h2 {
            color: #343a40;
        }

        p {
            color: #6c757d;
        }

        .about-lawyer {
            margin-top: 0px;
        }

        .about-lawyer p {
            text-align: justify;
        }

        .practice-areas {
            margin-top: 20px;
        }

        li {
            margin: 5px;
            list-style-type:disc; 
            
        }

        .contact-info {
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <?php
        include_once('partials/_header.php');
    ?>
    <!-- Header End -->

     <!-- Lawyer's Landing Page -->
     <div class="lawyer-page">
        <div class="lawyer-info">
            <img src="<?php echo $row['profilephoto']; ?>" alt="Lawyer Image" class="lawyer-image">
            <h1><?php echo $row['fname']." ".$row['lname']; ?></h1>
            <p>Attorney at Law</p>
            <!-- Book an Appointment Button -->
            <a href="booking.php?email=<?php echo $row['email']; ?>" class="btn btn-primary">Book an Appointment</a>
        <a href="feeedback.php?email=<?php echo $row['email']; ?>" class="btn btn-primary">Give Feedback</a>
        </div>

        <!-- Detailed Information about the Lawyer -->
        <div class="lawyer-details">
            <!-- About Lawyer Section -->
            <div class="about-lawyer" style="width: 90%;">
                <h2>About Me</h2>
                <p>
                <?php echo $row['about']; ?>
                </p>
                
                <!-- Add more details as needed -->
            </div>

            <!-- Practice Areas Section -->
            <div class="practice-areas">
                <h2>Practice Areas</h2>
                <ul>
                    <li><?php echo $row['practice_area']; ?></li>
                    <!-- Add more practice areas as needed -->
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p>Email: <?php echo $row['email']; ?></p>
                <p>Phone: <?php echo $row['phonenumber']; ?></p>
                <p>Office Address : <?php echo $row['address'].",".$row['city'].",".$row['state']; ?></p>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-0 px-sm-0 px-md-0">
        <div class="row p-0 mt-0 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-0 text-center text-md-left mb-0 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">LegalEase</a>. All Rights Reserved.</p>
            </div> 
        </div>
    </div>
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
