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

    <style>

        .booking-section {
            background-color: #343a40;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #ffffff;
        }

        .booking-section h2 {
            color: #ffffff;
            margin-bottom: 20px;
        }

        .booking-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .booking-card p {
            color: #343a40;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img src="img/legaleaselogo.png" alt="logo" class="btn btn-lg btn-outline-light btn-lg-square mr-2">
                    <h1 class="m-0 display-4 text-primary ">LegalEase</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>legalease.info1@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+91 01234 56789</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                             <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.facebook.com/profile.php?id=61555648221328">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://twitter.com/legalEase1_info">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <!-- <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-linkedin-in"></i> -->
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.instagram.com/legalease.info/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.youtube.com/channel/UCci7S-7zkwQ27T8I6j4Y6-w">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">LegalEase</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="lawyer-home.html" class="nav-item nav-link ">Home</a>
                            <!-- <a href="lawyer-booking.html" class="nav-item nav-link active">Bookings</a> -->
                            <a href="lawyer-payment.html" class="nav-item nav-link">Payment</a>
                            <a href="lawyer-testimonial.html" class="nav-item nav-link">Reviews</a>
                            <!-- <a href="contact.html" class="nav-item nav-link">Contactssss</a> -->
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Menu Item 1</a>
                                    <a href="#" class="dropdown-item">Menu Item 2</a>
                                    <a href="#" class="dropdown-item">Menu Item 3</a>
                                </div>
                            </div> -->
                        </div>
                        <a href="register.html" class="btn btn-primary mr-3 d-none d-lg-block">LogIn/SignUp</a>
                        <!-- <div class="nav-input">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text"  placeholder="Search Lawyers">
                        </div> -->
                        <!-- <a href="register.html" class="btn btn-primary mr-3 d-none d-lg-block">LogIn/SignUp</a> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Booking status-pending start -->
    <!-- <div class="container-fluid py-2">
        <div class="container py-2">
            <h1 class="mb-4">Platform Highlights</h1>
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-9 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(252, 252, 255, 0.747);">
                        </div></div></div></div></div></div> -->
    <!-- Booking status-pending stop -->

    <!-- Booking Sections Start -->
    <div class="container mt-5">
        <!-- Pending Requests -->
        <div class="booking-section">
            <h2>Pending Requests</h2>
            <div class="booking-card">
                <!-- Dummy data for pending requests -->
                <p>Client Name: John Doe</p>
                <p>Case Type: Personal Injury</p>
                <p>Appointment Date: January 15, 2023</p>
                <p>Status: Pending</p>
                <p>Details: sample data.</p>
                <!-- Add more details as needed -->
            </div>
        </div>

        <!-- Accepted Requests -->
        <div class="booking-section">
            <h2>Accepted Requests</h2>
            <div class="booking-card">
                <!-- Dummy data for accepted requests -->
                <p>Client Name: Jane Smith</p>
                <p>Case Type: Family Law</p>
                <p>Appointment Date: February 1, 2023</p>
                <p>Status: Accepted</p>
                <p>Details: sample data.</p>
                <!-- Add more details as needed -->
            </div>
        </div>

        <!-- Declined Requests -->
        <div class="booking-section">
            <h2>Declined Requests</h2>
            <div class="booking-card">
                <!-- Dummy data for declined requests -->
                <p>Client Name: Alice Johnson</p>
                <p>Case Type: Criminal Defense</p>
                <p>Appointment Date: March 10, 2023</p>
                <p>Status: Declined</p>
                <p>Details: sample data.</p>
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>
    <!-- Booking Sections End -->
    <!-- Vendor Booking Page Start -->
    <div class="container mt-5">
        <!-- Meeting Requests Section -->
        <div class="booking-section">
            <h2>Meeting Requests</h2>
            
            <!-- Meeting Request Card Template -->
            <div class="booking-card">
                <p>Client Name: John Doe</p>
                <p>Case Type: Family Law</p>
                <p>Appointment Date: January 20, 2024</p>
                <p>Status: Pending</p>
                <button class="btn btn-success">Accept</button>
                <button class="btn btn-danger">Decline</button>
            </div>
            <!-- End of Card Template -->

            <!-- Add more cards as needed -->

        </div>
        <!-- End of Meeting Requests Section -->

        <!-- Graphs Section -->
        <div class="booking-section">
            <h2>Performance Metrics</h2>
            <div class="row">
                <div class="col-md-6">
                    <!-- Appointments Chart -->
                    <canvas id="appointmentsChart" width="400" height="400"></canvas>
                </div>
                <div class="col-md-6">
                    <!-- Revenue Chart -->
                    <canvas id="revenueChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <!-- End of Graphs Section -->
    </div>
    <!-- Vendor Booking Page End -->


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
            <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div> -->
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
    
</body>
</html>