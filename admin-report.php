<?php
session_start();
include_once('partials/_dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reports</title>
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
    
    <style>
        /* Add your CSS styles here */
        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: -30px; /* Adjust margin-top as needed */
        }

        .block {
            flex: 0 0 20%; /* Adjust width as needed */
            margin: 10px;
            padding: 20px;
            background-color: #f8e8d0;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .block:hover {
            transform: scale(1.05);
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

        .block a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
<?php
    include_once("partials/_adminheader.php");
    ?>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="container">
                <div class="block">
                    <i class="fas fa-user"></i>
                    <a href="client-report.php" class="nav-item nav-link"><b>Client Report</b></a>
                </div>

                <div class="block">
                    <i class="fas fa-users"></i>
                    <a href="lawyer-report.php" class="nav-item nav-link"><b>Lawyer Report</b></a>
                </div>

                <div class="block">
                    <i class="fas fa-briefcase"></i>
                    <a href="bookings-report.php" class="nav-item nav-link"><b>Bookings Report</b></a>
                </div>

                <div class="block">
                    <i class="fas fa-money-bill-wave"></i>
                    <a href="fe.php" class="nav-item nav-link"><b>Feedback Report</b></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
