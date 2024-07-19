<?php
session_start();
include_once('partials/_dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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
    <body>
        <!-- Header Start -->
        <?php
            include_once("partials/_adminheader.php");
        ?>
    <style>
        

        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            /* margin: 20px; */
        }

        .block {
            flex: 0 0 30%;
            /* margin: 20px; */
            /* padding: 20px; */
            background-color: #f8e8d0;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .block i {
            font-size: 2em;
            /* margin-bottom: 10px; */
            color: #5c4422;
        }

        .block h2 {
            color: #5c4422;
            font-size: 1.5em;
    }

    .container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        /* margin: 10px; */
    }

    .block {
        flex: 0 0 30%;
        margin: 10px;
        padding: 20px;
        background-color: #f8e8d0;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease; /* Added transition property */
    }

    .block:hover {
        transform: scale(1.05); /* Zoom in on hover */
    }

    .block i {
        font-size: 2em;
        margin-bottom: 10px;
        color: #5c4422;
    }

    .block h2 {
        color: #5c4422;
        font-size: 1.5em;
    }
    </style>
</head>

<body>
    <div class="container-fluid py-5">
        <div class="container py-5">
    <div class="container">
        <div class="block">
            <i class="fas fa-user"></i>
            <h2>Visitors</h2>
            <p>Track your website visitors.</p>
        </div>

        <div class="block">
            <i class="fas fa-users"></i>
            <h2>Clients</h2>
            <p>Manage your client relationships.</p>
        </div>

        <div class="block">
            <i class="fas fa-briefcase"></i>
            <h2>Lawyers</h2>
            <p>Monitor your legal team.</p>
        </div>

        <div class="block">
            <i class="fas fa-money-bill-wave"></i>
            <h2>Payments</h2>
            <p>Handle financial transactions.</p>
        </div>

        <div class="block">
            <i class="fas fa-comments"></i>
            <h2>Feedback</h2>
            <p>Collect valuable feedback.</p>
        </div>

        <div class="block">
            <i class="fas fa-chart-bar"></i>
            <h2>Reports</h2>
            <p>Generate insightful reports.</p>
        </div>

        <div class="block">
            <i class="fas fa-calendar-check"></i>
            <h2>Bookings</h2>
            <p>Manage appointments and bookings.</p>
        </div>
    </div>
</body>

</html>
