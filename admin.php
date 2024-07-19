<?php
session_start();
include_once('partials/_dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LegalEase/contact</title>
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
        th,td{
            white-space: nowrap;
        }
        img{
            width: 50px;
            height: 45px;
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <?php
            include_once("partials/_adminheader.php");
        ?>
    <!-- Header End -->

    <!-- Admin Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
  <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">CLIENT</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SNo</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Pincode</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql="SELECT * FROM `client`";
                    $result=mysqli_query($conn,$sql);
                    $num=1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr>
                            <td>$num</td>
                            <td>".$row['fname']."</td>
                            <td>".$row['lname']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['DOB']."</td>
                            <td>".$row['Pincode']."</td>
                            <td>".$row['address']."</td>
                            <td>".$row['city']."</td>
                            <td>".$row['state']."</td>
                            <td>".$row['phonenumber']."</td>
                        </tr>";
                        $num+=1;
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Admin Page End -->
  
    <!-- Area Chart -->
<div class="container-fluid py-20">
    <div class="container py-15">
        <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">CLIENT's COUNT</h1>
        <!-- Add this canvas element for the area chart -->
        <canvas id="clientAreaChart" style="width:45% ;height:30%; margin: 0 25;"></canvas>
        <div class="table-responsive">
            <!-- Your client data table goes here -->
        </div>
    </div>
</div>
<!--  background-color: #515050; -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-0 px-sm-0 px-md-0">
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">LegalEase</a>. All Rights Reserved.</p>
            </div> 
        </div>
    </div>
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

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- JavaScript Libraries -->
<!-- Your existing scripts go here -->


<!-- Chart Script -->
<script>
    // Dummy data (replace with actual data from MongoDB)
    var clientData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        totalUsers: [100, 150, 200, 180, 220, 250, 300],
        activeUsers: [80, 120, 150, 140, 180, 200, 250],
    };
    // Get the canvas element and initialize the chart
    var ctx = document.getElementById('clientAreaChart').getContext('2d');
    var areaChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: clientData.labels,
            datasets: [
                {
                    label: 'Total Users',
                    data: clientData.totalUsers,
                    fill: true,
                    backgroundColor: 'rgba(180, 156, 115, 0.2)', // Adjust color to match your palette
                    borderColor: 'rgba(180, 156, 115, 1)', // Adjust color to match your palette
                    borderWidth: 2,
                    spanGaps: true,
                },
                {
                    label: 'Active Users',
                    data: clientData.activeUsers,
                    fill: true,
                    backgroundColor: 'rgba(184, 160, 125, 0.4)', // Adjust color to match your palette
                    borderColor: 'rgba(184, 160, 125, 1)' , // Adjust color to match your palette
                    
                    borderWidth: 2,
                    spanGaps: true,
                },
            ],
        },
        options: {
            scales: {
                x: {
                    type: 'category',
                    labels: clientData.labels,
                    ticks: {
                        font: {
                            family: "'Montserrat', 'Roboto'", // Replace with your font
                        },
                    },
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        font: {
                            family: "'Montserrat', 'Roboto'", // Replace with your font
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    labels: {
                        font: {
                            family: "'Montserrat', 'Roboto'", // Replace with your font
                        },
                    },
                },
            },
        },
    });
</script>



</body>

</html>