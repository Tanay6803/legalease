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

    <!-- Line graph -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <!-- Header Start -->
    <?php
            include_once("partials/_adminheader.php");
        ?>
    <!-- Header End -->

     <!-- Line Chart -->
     <div class="container-fluid py-4">
        <div class="container py-4">
            <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">MONTHLY VISITORS</h1>
            <div class="card-body">
                <canvas id="lineChart" width="300" height="300"></canvas>
            </div>
        </div>
    </div>
    
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

    <!-- <script>
        // Dummy data (replace with actual data from your source)
        var monthlyVisitorsData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            visitors: [500, 600, 700, 800, 900, 1000, 1100],
        };

        // Get the canvas element and initialize the chart
        var ctx = document.getElementById('monthlyVisitorsChart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: monthlyVisitorsData.labels,
                datasets: [{
                    label: 'Monthly Visitors',
                    data: monthlyVisitorsData.visitors,
                    fill: false,
                    borderColor: 'rgba(0, 123, 255, 1)', // Adjust color to match your palette
                    borderWidth: 2,
                }],
            },
            options: {
                scales: {
                    x: {
                        type: 'category',
                        labels: monthlyVisitorsData.labels,
                    },
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script> -->


    <!-- Line Chart Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dummy data (replace this with your actual data)
            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var monthlyVisitors = [500, 700, 1000, 1200, 800, 1500, 2000, 1800, 2200, 2500, 3000, 2800];

            var lineChart = new Chart(document.getElementById('lineChart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Monthly Visitors',
                        borderColor: 'rgba(180, 156, 115, 1)',
                        backgroundColor: 'rgba(180, 156, 115, 0.5)',
                        data: monthlyVisitors,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: true
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>