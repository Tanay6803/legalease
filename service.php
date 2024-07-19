<?php
session_start();
include_once('partials/_dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LegalEase/practice</title>
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
                <h3 class="display-3 text-white text-uppercase">Practice</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Practice</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-uppercase">Our Practice</h6>
                    <h1 class="mb-4">Our Practice Areas</h1>
                    <p>Invidunt lorem justo clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-primary mt-2">More Services</a>
                </div> -->
                <!-- <div class="col-lg-12 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;" data-items="4">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Civil Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Services End -->

    <!-- <div class="container-fluid py-2">
    <div class="container py-2x">
        <div class="row">
            <div class="col-lg-12 pt-5 pt-lg-0">
                <div class="bg-primary rounded" style="height: 300px; padding: 30px;"> -->

                <!-- Display items in a row without the carousel
                <div class="row mx-0 mt-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Civil Law</h5>
                            <!-- <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p> -->
                        <!-- </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5> -->
                            <!-- <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p> -->
                        <!-- </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5> -->
                            <!-- <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p> -->
                        <!-- </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5> -->
                            <!-- <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p> -->
                        <!-- </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
 --> -->

 <!-- <style>
    /* .info-box {
        display: none;
        position: absolute;
        background-color: white;
        border: 1px solid #ddd;
        padding: 15px;
        z-index: 1;
    } */
    
    /* Add this CSS to your existing styles */
    .info-box {
        position: relative;
    }

    .info-box:hover .extra-info {
        display: block;
        display: none;
        position: absolute;
        background-color: #ffffff79;
        width: 400px;
        border: 2px solid #000000;
        padding: 20px;
        font-size: 16px;
        margin-top: 10px;
        /* z-index: 1; */
    }
</style> -->

<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const items = document.querySelectorAll(".info-trigger");

        items.forEach((item) => {
            item.addEventListener("mouseover", function () {
                const infoBox = this.querySelector(".info-box");
                infoBox.style.display = "block";
            });

            item.addEventListener("mouseout", function () {
                const infoBox = this.querySelector(".info-box");
                infoBox.style.display = "none";
            });
        });
    });
</script> -->
<style>
    /* Add this CSS code to your stylesheet or in the head of your HTML document */

/* Style for the chat box container */
.chat-box-container {
    position: absolute;
    display: none;
    width: 90lvh; /* Auto width to expand horizontally */
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 1;
    top: 127%; /* Adjust the top position as needed */
    text-align: left; /* Left-align text */
}

/* Style for the arrow pointing to the first div */
.chat-box-container::before {
    content: '';
    position: absolute;
    top: -20px; /* Adjust the top position as needed */
    left: 50%;
    margin-left: -10px;
    border-width: 10px;
    border-style: solid;
    border-color: transparent transparent #fff transparent;
}

/* Show the chat box when hovering over the first div */
.d-flex:hover .chat-box-container {
    display: block;
}

/* Adjust the positioning of the arrow */
.d-flex:hover .chat-box-container::before {
    left: calc(50% - 10px);
}

</style>
<div class="container-fluid py-2">
    <div class="container py-2x">
        <div class="row">
            <div class="col-lg-12 pt-5 pt-lg-0">
                <div class="bg-primary rounded" style="height: 300px; padding: 30px;">

                    <!-- Display items in a row without the carousel -->
                    <div class="row mx-0 mt-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                    <i class="fa fa-2x fa-landmark"></i>
                                </div>
                                <h5 class="mb-4 px-4">Civil Law</h5>
                                <div class="chat-box-container">
                                    <h5>Overview</h5>
                                    <p>Civil Law pertains to the legal framework governing disputes between individuals or entities concerning their rights, obligations, and liabilities. It deals with non-criminal matters.</p>
                                    <h5>Relevant Legislation</h5>
                                    <p>The Indian legal system has a comprehensive set of laws covering civil matters, including:
                                        <ul>
                                            <li>Indian Contract Act</li>
                                            <li>Sale of Goods Act</li>
                                            <li>Specific Relief Act</li>
                                        </ul>
                                    </p>
                                    <h5>Key Aspects</h5>
                                    <ul>
                                        <li>Contracts: The Indian Contract Act governs the formation and enforcement of contracts.</li>
                                        <li>Property Disputes: Civil law addresses disputes related to land, property, and real estate.</li>
                                        <li>Torts: Laws on civil wrongs, such as negligence and defamation, fall under civil jurisdiction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                    <i class="fa fa-2x fa-users"></i>
                                </div>
                                <h5 class="mb-4 px-4">Family Law</h5> 
                                <div class="chat-box-container">
                                    <h5>Overview</h5>
                                    <p>Family Law in India governs matters related to family and domestic relations. It covers a wide range of issues, including marriage, divorce, adoption, guardianship, and succession.</p>
                                    <h5>Relevant Legislation</h5>
                                    <p>Family law in India is primarily regulated by various acts, such as:
                                        <ul>
                                            <li>Hindu Marriage Act</li>
                                            <li>Special Marriage Act </li>
                                            <li>Guardians and Wards Act</li>
                                        </ul>
                                    </p>
                                    <h5>Key Aspects</h5>
                                    <ul>
                                        <li>Marriage: The Hindu Marriage Act applies to Hindus and governs marriage ceremonies and related rituals.</li>
                                        <li>Divorce: The legal process of ending a marriage is defined under different acts based on religion.</li>
                                        <li>Adoption: Laws specify the procedures and conditions for adopting a child.</li>
                                        <li>Guardianship: The Guardians and Wards Act addresses matters related to the custody of children.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                    <i class="fa fa-2x fa-hand-holding-usd"></i>
                                </div>
                                <h5 class="mb-4 px-4">Business Law</h5>
                                <div class="chat-box-container">
                                    <h5>Overview</h5>
                                    <p>Business Law in India encompasses the legal framework regulating commercial and business activities. It covers a diverse range of legal disciplines impacting businesses, transactions, and commercial operations.</p>
                                    <h5>Relevant Legislation</h5>
                                    <p>Key acts governing business law in India include:
                                        <ul>
                                            <li>Companies Act</li>
                                            <li>Taxation Laws</li>
                                            <li>Consumer Protection Law</li>
                                            <li>Labour Laws</li>
                                        </ul>
                                    </p>
                                    <h5>Key Aspects</h5>
                                    <ul>
                                        <li>Company Formation: The Companies Act regulates the incorporation and functioning of companies.</li>
                                        <li>Taxation: Various tax laws dictate how businesses are taxed at the national and state levels.</li>
                                        <li>Consumer Protection: Laws protect consumers from unfair trade practices.</li>
                                        <li>Labour Laws: These govern employer-employee relationships, ensuring fair labor practices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                    <i class="fa fa-2x fa-gavel"></i>
                                </div>
                                <h5 class="mb-4 px-4">Criminal Law</h5>
                                <div class="chat-box-container">
                                    <h5>Overview</h5>
                                    <p>Criminal Law in India is primarily defined by the Indian Penal Code (IPC), enacted in 1860. It deals with offenses, their penalties, and procedures for prosecution.</p>
                                    <h5>Relevant Legislation</h5>
                                    <p>The Indian Penal Code is the cornerstone of criminal law, covering a wide range of offenses. Other statutes, such as the Criminal Procedure Code and Evidence Act, complement it.
                                    </p>
                                    <h5>Key Aspects</h5>
                                    <ul>
                                        <li>Offense Categories: The IPC categorizes offenses against persons, public order, women, the state, etc.</li>
                                        <li>Penalties: It specifies punishments for crimes, including imprisonment and fines.</li>
                                        <li>Legal Procedures: The Criminal Procedure Code outlines the process of investigation, trial, and appeals.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Don't Settle for Uncertainty: Book a Lawyer and Own Your Legal Journey!</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="team.html">Get an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->


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
                        Meera Rai provided excellent legal advice, guiding me through the complexities with patience. Legalease made connecting with her hassle-free.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-8.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Radhika Sharma</h5>
                            <p class="m-0">Meera Rai</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Debjit Roy from Legalease was incredibly responsive and knowledgeable. Legalease simplified the lawyer-client connection process for me.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-7.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Rohan Kapoor</h5>
                            <p class="m-0">Debjit Roy</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sanya Mehra's expertise helped me navigate through family law matters smoothly. Legalease ensures a seamless experience for clients.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-10.png" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Priya Singh</h5>
                            <p class="m-0">Sanya Mehra</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Neha Kapoor was thorough and dedicated to my case. Legalease is a user-friendly platform that connects clients with top-notch legal professionals.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-9.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Arjun Mehra</h5>
                            <p class="m-0">Neha Kapoor</p>
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