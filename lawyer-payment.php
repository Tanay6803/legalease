<?php
session_start();
include_once('partials/_dbconnect.php');

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

    <!--chart style -->
    <style>

.charts-container {
    display: flex;
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
}

.chart {
    width: 50%;
    padding: 20px;
    box-sizing: border-box;
}
    </style>
    <!-- Add this CSS in your head section -->
<style>
    /* Styles for the meeting requests section */
    .table th, .table td {
        text-align: center;
    }

    /* Styles for the graphs section */
    .graph-container {
        margin-top: 20px;
    }
</style>

</head>

<body>
    <!-- Header Start -->
    <?php
    include_once('partials/_lawyerheader.php');
    ?>
    <!-- Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">Amount Received</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client Name</th>
                            <th>Amount Received</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <?php
                        $sql="SELECT * FROM `payment`";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $useremail=$row['user_email'];
                                $sql="SELECT * FROM `client` WHERE `email`='$useremail'";
                                $result2=mysqli_query($conn,$sql);
                                $row2=mysqli_fetch_assoc($result2);
                                echo "<tr>
                                <td>".$row['payment_id']."</td>
                                <td>".$row2['fname']." ".$row2['lname']."</td>
                                <td>₹".$row['amount']."</td>
                                <td>".$row['payment_date']."</td>
                                <td>".$row['payment_time']."Hrs</td>
                                ";
                            }
                        }
                        
                        ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">Amount Refunded</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client Name</th>
                            <th>Amount Refunded</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                        <tr>
                            <td>1</td>
                            <td>Ananya Mehra</td>
                            <td>₹999</td>
                            <td>2024-01-31</td>
                            <td>09:30 AM</td>
                        </tr>
                     
                        <tr>
                            <td>2</td>
                            <td>Prateek Kapoor</td>
                            <td>₹999</td>
                            <td>2024-01-31</td>
                            <td>10:45 AM</td>
                        </tr>
                      
                        <tr>
                            <td>3</td>
                            <td>Neha Sharma</td>
                            <td>₹999</td>
                            <td>2024-01-31</td>
                            <td>12:00 PM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
    
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Our Office</h5>
                        <p class="m-0">University Road, Ahmedabad, Gujarat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">legalease.info1@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+91 01234 56789</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <!-- <a href="index.html" class="navbar-brand">
                    <img src="img/legaleaselogo.png" alt="logo" class="btn btn-lg btn-outline-light btn-lg-square mr-2">
                    <h1 class="m-0 mt-n2 display-4 text-primary ">LegalEase</h1>
                </a> -->
                <a href="index.html" class="navbar-brand">
                    <div class="d-flex align-items-center"> <!-- Use flexbox for alignment -->
                        <img src="img/legaleaselogo.png" alt="logo" class="btn btn-lg btn-outline-light btn-lg-square mr-2">
                        <h1 class="m-0 mt-n2 display-4 text-primary">LegalEase</h1>
                    </div>
                </a>
                <p> • Legally • Easily • Simply • </p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="team.html"><i class="fa fa-angle-right mr-2"></i>Attorney</a>
                    <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="https://digitalpolice.gov.in/Default.aspx"><i class="fa fa-angle-right mr-2"></i>Register e-FIR</a>
                </div>
            </div>
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">LegalEase</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="btn btn-primary px-3 chat-bot"><i class="far fa-comment-dots"></i></a>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</body>

</html>