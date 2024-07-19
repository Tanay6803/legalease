<?php
session_start();
include_once('partials/_dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LegalEase/about</title>
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


    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">About Us</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
                    <h1 class="mb-4"> Legal Mastery Unleashed</h1>
                    <p>At LegalEase, our distinguished legal professionals bring forth an impressive legacy of unwavering expertise. Navigating through the intricacies of diverse cases and evolving legal frameworks, our seasoned lawyers stand as pillars of unparalleled guidance. Beyond a mere advisory role, they are architects of impactful solutions that not only leave a lasting mark on individual cases but resonate throughout entire communities. With a proven track record of victories, we take pride in crafting legal strategies that stand the test of time and contribute to the betterment of the legal landscape.</p>
                    <!-- <a href="" class="btn btn-primary mt-2">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features start -->
    <div class="container-fluid py-2">
        <div class="container py-2">
            <h1 class="mb-4">Platform Highlights</h1>
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-9 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(252, 252, 255, 0.747);">
            <div class="row">
                <div class="col-lg-25 mt-4 mt-lg-0">
                    <!-- <h1 class="mb-4">Platform Highlights</h1> -->
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                            <h5 class="text-secondary m-0">01</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Diversity of Legal Domains</h5>
                            <p class="m-0">Our platform spans a diverse array of legal domains, from family law and business law to criminal law and civil law, providing a comprehensive solution for a wide range of legal requirements.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                            <h5 class="text-secondary m-0">02</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Expertise and Specialization</h5>
                            <p class="m-0">With a network of experienced and specialized lawyers, Legalease guarantees top-notch expertise in each practice area. Our attorneys are well-versed in the nuances and complexities of their respective fields, ensuring that clients receive informed and strategic legal advice.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                            <h5 class="text-secondary m-0">03</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Innovative Chatbot</h5>
                            <p class="m-0">Legalease goes beyond the ordinary by providing an innovative chatbot specifically trained on the Indian Constitution. This ensures that clients have instant access to reliable information and guidance, enhancing their legal experience.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                            <h5 class="text-secondary m-0">04</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Tailored Legal Solutions</h5>
                            <p class="m-0"> We understand that each legal case is unique. Our commitment to providing tailored legal solutions means that clients can expect personalized strategies designed to address their specific circumstances and achieve optimal outcomes.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                            <h5 class="text-secondary m-0">05</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Proven Track Record</h5>
                            <p class="m-0">Legalease boasts a proven track record of successful cases across various practice areas. Our history of delivering favorable results underscores our commitment to excellence and client satisfaction.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                            <h5 class="text-secondary m-0">06</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Efficient and Transparent Process</h5>
                            <p class="m-0">Navigating the legal landscape can be daunting, but our efficient and transparent process simplifies the experience. Clients can expect clear communication, regular updates, and a streamlined approach that prioritizes their convenience and peace of mind.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                            <h5 class="text-secondary m-0">07</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Accessible Legal Support</h5>
                            <p class="m-0">Legalease is committed to making legal support accessible to all. Whether you are seeking assistance in family matters, business transactions, or civil disputes, our platform ensures that quality legal guidance is just a click away.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

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

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>