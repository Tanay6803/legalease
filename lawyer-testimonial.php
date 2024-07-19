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

    <!--div style start-->
    <style>
        /* body {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            color: #343a40;
            background-color: #f8f9fa;
        } */

        /* Header styles */
        .navbar-brand  {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.8rem;
            color: #007bff;
        }

        .navbar-nav a {
            font-weight: 500;
            color: #6c757d;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav a:hover {
            color: #007bff;
        }

        /* Testimonial container styles */
        .testimonial-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .testimonial {
            background-color: #f0ece6; /* Soothing brown background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: calc(33.33% - 20px);
            box-sizing: border-box;
            text-align: left;
            outline: none;
            transition: transform 0.3s ease-in-out;
        }

        .testimonial:hover {
            transform: scale(1.05);
        }

        .testimonial img {
            border-radius: 50%;
            max-width: 100px;
            margin-right: 15px;
        }

        .testimonial-content {
            flex: 1;
        }

        .testimonial p {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .testimonial h3 {
            margin: 0;
            color: #0c0f12;
            font-size: 1.2rem;
        }

        /* Footer styles */
        .bg-secondary {
            background-color: #343a40;
        }

        .text-white {
            color: #ffffff;
        }

        .btn-outline-light {
            border-color: #ffffff;
            color: #ffffff;
        }

        .btn-outline-light:hover {
            background-color: #ffffff;
            color: #343a40;
        }

        /* Back to top button styles */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            padding: 10px;
            font-size: 1.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .back-to-top:hover {
            background-color: #0056b3;
        }
    </style>
    <!-- div style end -->
</head>

<body>
    <!-- Header Start -->
    <?php
    include_once('partials/_lawyerheader.php');
    ?>
    <!-- Header End -->

    <!-- Testimonials start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
    <div class="testimonial-container" id="testimonialContainer">
        <!-- Testimonials will be dynamically added here using JavaScript -->
    </div>
</div>
</div>
</div>
    <!-- testimonials end -->

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
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="service.php"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="team.php"><i class="fa fa-angle-right mr-2"></i>Attorney</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a>
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

    <!-- Testimonaial javascript -->
    <script>
        const testimonials = [
            {
                name: "John Doe",
                image: "img/testimonial-1.jpg",
                testimonial: "Responsive and Supportive Service: I was impressed by the responsiveness of the lawyer I booked through the website. They were attentive to my queries and provided me with the guidance I needed. The booking platform made the entire process hassle-free."
            },
            {
                name: "Jane Smith",
                image: "img/testimonial-5.jpg",
                testimonial: "Streamlined Process, Expert Guidance: Booking an appointment through this platform was a breeze. I received expert guidance from the lawyer I chose, and the advice was comprehensive and easy to understand. A fantastic resource for legal assistance!"
            },
            {
                name: "John Doe",
                image: "img/testimonial-3.jpg",
                testimonial: "Great Selection of Lawyers: The website offered a diverse range of lawyers to choose from. I found a lawyer specializing in my area of concern, and the consultation was enlightening. I appreciate the convenience and quality service provided."
            },
            {
                name: "Jane Smith",
                image: "img/testimonial-4.jpg",
                testimonial: "Professional and Timely Assistance: I needed urgent legal advice and was amazed by how quickly I could book an appointment with a knowledgeable lawyer. The platform was user-friendly, and the lawyer provided me with valuable insights. Highly recommended!"
            },
        ];

        const testimonialContainer = document.getElementById("testimonialContainer");

        testimonials.forEach(testimonial => {
            const testimonialDiv = document.createElement("div");
            testimonialDiv.className = "testimonial";
            testimonialDiv.innerHTML = `
                <img src="${testimonial.image}" alt="${testimonial.name}">
                <h3>${testimonial.name}</h3>
                <p>${testimonial.testimonial}</p>
            `;
            testimonialContainer.appendChild(testimonialDiv);
        });
    </script>

</body>

</html>