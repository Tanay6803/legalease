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

    <!-- search bar style -->
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
    top: 12 px;
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

    <!-- dashboard style -->
    <style>
        /* Your existing styles */
        #userDashboard {
            display: flex;
            height: 100vh;
            background-color: #f4f4f4;
        }

        #optionsContainer {
            width: 25%;
            padding: 20px;
            box-sizing: border-box;
            border-right: 1px solid #ccc;
        }

        #contentContainer {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .dashboardOption {
            cursor: pointer;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #ddd;
            border-radius: 5px;
        }

        .dashboardOption:hover {
            background-color: #ccc;
        }

        #myProfileContent,
        #editProfileContent,
        #logoutContent {
            display: none;
        }
    </style>
</head>
</head>

<body>
    <!-- Header Start -->
    <?php 
    include_once('partials/_header.php');
    ?>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Attorney Connect Hub</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Fostering direct client-lawyer relationships</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="register.php">LogIn/SignUp</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Results You Deserve</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Earning rightful outcomes with dedicated advocacy</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="register.php">LogIn/SignUp</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">CONSTITUTIONAL WISDOM AWAITS</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Dive into AI-Driven Legal Conversations Now!</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="https://lawbotpro.com/#!">AI Chatbot</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 350px; margin-left: -205px;">Learn About Us</h2>
                    <!-- <h6 class="text-uppercase">Learn About Us</h6> -->
                    <h1 class="mb-4">We Provide Reliable Lawyers</h1>
                    <p> Discover LegalEase, your go-to platform for accessible legal information and assistance.<br> 
                        <b>Our mission is simple:</b> We wish to empower our clients with the accurate legal knowledge they need while connecting them with skilled lawyers for their guidance. Make informed choices confidently with LegalEase by your side! 
                        </p>
                    <a href="about.php" class="btn btn-primary mt-2">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-uppercase">Our Practice</h6>
                    <h1 class="mb-4">Our Practice Areas</h1>
                    <p> Explore Legalease's expertise across diverse legal domains for reliable and comprehensive solutions tailored to your specific needs.</p>
                    <a href="service.php" class="btn btn-primary mt-2">Learn More</a>
                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-left bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Civil Law</h5>
                            <p class="m-0">Civil law manages non-criminal disputes between individuals or entities, dealing with matters such as contracts, property, and personal injuries.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-left bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5>
                            <p class="m-0">Family law addresses legal issues within families, including marriage, divorce, adoption, guardianship, and inheritance matters.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-left bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5>
                            <p class="m-0">Business law regulates the legal framework governing commercial and business activities, encompassing areas like transactions, contracts, and corporate operations.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-left bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">Criminal law defines offenses against society, covering crimes like assault, theft, and fraud, and prescribes punishments for individuals found guilty.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


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
    <div class="container-fluid py-5">
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
                                <p class="m-0">Discover top-tier legal practices at Legalease, connecting clients with skilled lawyers for optimal solutions.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Efficiency & Trust</h5>
                                <p class="m-0">At Legalease, ensure efficiency and trust through versatile online and offline lawyer meetings, backed by a responsive chatbot and messaging for seamless client-lawyer interactions.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Results You Deserve</h5>
                                <p class="m-0">Legalease: Delivering the outcomes you deserve by facilitating meaningful connections between clients and dedicated lawyers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Let's get started. Connect with lawyers for expert advice.</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="contact.php">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Few Attorneys</h6>
                <h1 class="mb-4">Meet Few Best Attorneys</h1>
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
                                    <a class="btn btn-outline-light mx-1" href="#">Book Now</a>
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


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Testimonial</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Professional and Timely Assistance: I needed urgent legal advice and was amazed by how quickly I could book an appointment with a knowledgeable lawyer. The platform was user-friendly, and the lawyer provided me with valuable insights. Highly recommended!
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-5.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Maya Sharma</h5>
                            <p class="m-0">Lawyer: Neha Kapoor</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Great Selection of Lawyers: The website offered a diverse range of lawyers to choose from. I found a lawyer specializing in my area of concern, and the consultation was enlightening. I appreciate the convenience and quality service provided.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Aryan Kapoor</h5>
                            <p class="m-0">Lawyer: Sanya Mehra</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Streamlined Process, Expert Guidance: Booking an appointment through this platform was a breeze. I received expert guidance from the lawyer I chose, and the advice was comprehensive and easy to understand. A fantastic resource for legal assistance!
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Riya Choudhury</h5>
                            <p class="m-0">Lawyer: Debjit Roy</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Responsive and Supportive Service: I was impressed by the responsiveness of the lawyer I booked through the website. They were attentive to my queries and provided me with the guidance I needed. The booking platform made the entire process hassle-free.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Arjun Dasgupta</h5>
                            <p class="m-0">Lawyer: Meera Rai</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Highly Satisfied with Legal Assistance: The lawyer I connected with through the appointment booking site was professional and well-versed in the legal matters I needed help with. I received valuable advice that resolved my concerns. Thank you for the excellent service!
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-6.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Siddharth Malhotra</h5>
                            <p class="m-0">Lawyer: Rahul Singhania</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php
        include_once('partials/_footer.php');
    ?>
    <script>
        function handleSearch() {
            var searchInputValue = document.getElementById('searchInput').value;
            // Use the searchInputValue for searching or any other desired action
            console.log('Searching for:', searchInputValue);
        }
    </script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    

    <!-- dashboard script -->
     <script>
        // JavaScript function to show the user dashboard and hide login/registration
        function showUserDashboard() {
            // Hide login/registration
            document.querySelector('.login-container').style.display = 'none';

            // Show user dashboard
            document.getElementById('userDashboard').style.display = 'block';
        }

        // JavaScript function to initialize the dashboard link
        function initializeDashboardLink() {
            // Create an image element for the dashboard link
            var dashboardLink = document.createElement('img');
            dashboardLink.src = 'path/to/your/dashboard-image.jpg'; // Replace with the actual path
            dashboardLink.alt = 'User Dashboard';
            dashboardLink.onclick = showUserDashboard;

            // Replace the existing login/signup button with the dashboard link
            var loginButton = document.querySelector('.btn-login-signup'); // Replace with the actual selector
            loginButton.parentNode.replaceChild(dashboardLink, loginButton);
        }

        // Call the function to initialize the dashboard link
        initializeDashboardLink();
    </script>
    <!-- profile script -->
    <script>
        // Simulate user login. Replace this with your actual authentication logic.
const isLoggedIn = true; // Change to false for demonstration purposes


updateHeader();

    </script>
</body>

</html>