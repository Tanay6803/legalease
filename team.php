<?php
session_start();
include_once('partials/_dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LegalEase/attorneys</title>
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

    <!-- Search bar style -->
    <style>
        .nav-input {
        position: relative;
        display: inline-block;
        border: 2px solid #000; 
        border-radius: 5px;
        padding: 5px;
        margin: 10px;
        }
        .nav-input i {
            position: absolute;
            top: 12px;
            left: 8px;
            color: #888;
        }
        .nav-input input[type="text"] {
            border: none;
            outline: none;
            width: 430px; 
            padding: 5px;
            padding-left: 25px; 
            border-radius: 3px;
            font-size: 14px;
        }
        .nav-input input[type="text"]::placeholder {
            color: #aaa;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <?php 
    include_once('partials/_header.php');
    ?>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Attorney</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Attorney</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Team Family Law Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Attorneys Practising</h6>
                <h1 class="mb-4">Family Law</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                        <?php
                        $sql="SELECT * FROM `lawyer`";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result))
                        {
                            echo "<div class='team-item text-center bg-white rounded overflow-hidden pt-4'>
                                <h5 class='mb-2 px-4'>".$row['fname']." ".$row['lname']."</h5>
                                <p class='mb-3 px-2'>".$row['practice_area']."</p>
                                <div class='team-img position-relative'>
                                    <img class='img-fluid' src='".$row['profilephoto']."' alt=''>
                                    <div class='team-social'>
                                        <a class='btn btn-outline-light mx-1' href='landingPage.php?email=".$row['email']."'>Book Now</a>
                                    </div> 
                                </div>
                            </div>";
                        }
                        ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Team Civil Law Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Attorneys Practising</h6>
                <h1 class="mb-4">Civil Law</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Rahul Singhania</h5>
                            <p class="mb-3 px-2">Civil Law, Business Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-1.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Neha Kapoor</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-2.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Vikram Khanna</h5>
                            <p class="mb-3 px-2">Business Law, Civil Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-3.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Aditi Verma</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-4.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Rohan Malhotra</h5>
                            <p class="mb-3 px-2">Civil Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-5.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Meera Rai</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-6.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="landingPage.php">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Debjit Roy</h5>
                            <p class="mb-3 px-2">Civil Law, Family Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-7.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Sanya Mehra</h5>
                            <p class="mb-3 px-2">Business Law, Family Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-8.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Team Criminal Law Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Attorneys Practising</h6>
                <h1 class="mb-4">Criminal Law</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Rahul Singhania</h5>
                            <p class="mb-3 px-2">Civil Law, Business Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-1.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Neha Kapoor</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-2.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Vikram Khanna</h5>
                            <p class="mb-3 px-2">Business Law, Civil Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-3.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Aditi Verma</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-4.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Rohan Malhotra</h5>
                            <p class="mb-3 px-2">Civil Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-5.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Meera Rai</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-6.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="landingPage.php">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Debjit Roy</h5>
                            <p class="mb-3 px-2">Civil Law, Family Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-7.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Sanya Mehra</h5>
                            <p class="mb-3 px-2">Business Law, Family Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-8.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Team Business Law Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Attorneys Practising</h6>
                <h1 class="mb-4">Business Law</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Rahul Singhania</h5>
                            <p class="mb-3 px-2">Civil Law, Business Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-1.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Neha Kapoor</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-2.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Vikram Khanna</h5>
                            <p class="mb-3 px-2">Business Law, Civil Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-3.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Aditi Verma</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-4.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Rohan Malhotra</h5>
                            <p class="mb-3 px-2">Civil Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-5.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Meera Rai</h5>
                            <p class="mb-3 px-2">Family Law, Criminal Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-6.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="landingPage.php">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Debjit Roy</h5>
                            <p class="mb-3 px-2">Civil Law, Family Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-7.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Sanya Mehra</h5>
                            <p class="mb-3 px-2">Business Law, Family Law</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-8.png" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Appointment Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Get An Appointment</h1>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Get An Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Appointment End -->


    <!-- Features Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase">Our Features</h6>
                        <h1 class="mb-4">Why Choose Us</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Best Law Practices</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Efficiency & Trust</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Results You Deserve</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->


    <!-- Footer Start -->
    <?php
        include_once('partials/_footer.php');
    ?>
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
    <!-- Javascript for search bar -->
    <script src="https://kit.fontawesome.com/799b5625cb.js" crossorigin="anonymous"></script>
    

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>