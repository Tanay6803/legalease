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
</head>

<body>
    <!-- Header Start -->
    <?php
            include_once("partials/_adminheader.php");
        ?>
    <!-- Header End -->

    <div class="container-fluid py-5">
            <div class="container py-5">
          <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">BOOKING</h1>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr> 
                                <th>Payment ID</th>
                                <th>User Name</th>
                                <th>Lawyer Name</th>
                                <th>Amount</th>
                                <th>Payment Date</th>
                                <th>Payment Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql="SELECT * FROM `payment`";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $email=$row['lawyer_email'];
                                $sql2="SELECT * FROM `lawyer` WHERE `email`='$email'";
                                $result2=mysqli_query($conn,$sql2);
                                $row2=mysqli_fetch_assoc($result2);
                                $email=$row['user_email'];
                                $sql3="SELECT * FROM `client` WHERE `email`='$email'";
                                $result3=mysqli_query($conn,$sql3);
                                $row3=mysqli_fetch_assoc($result3);
                                echo "<tr>
                                    <td>".$row['payment_id']."</td>
                                    <td>".$row3['fname']." ".$row3['lname']."</td>
                                    <td>".$row2['fname']." ".$row2['lname']."</td>
                                    <td>₹.".$row['amount']."</td>
                                    <td>".$row['payment_date']."</td>
                                    <td>".$row['payment_time']."</td>
                                </tr>";
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-0     px-sm-0 px-md-0">
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

    <script>
        // Dummy data (replace with actual data from your source)
        var paymentData = {
            labels: ["Successful", "Pending"],
            counts: [90, 10], // Replace with actual counts
        };

        // Get the canvas element and initialize the chart
        var ctx = document.getElementById('paymentChart').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                // labels: paymentData.labels,
                datasets: [{
                    label: '',
                    data: paymentData.counts,
                    backgroundColor: ['rgba(180, 156, 115, 0.5)', 'rgba(50, 50, 50, 0.5)'], // Brown and black-gray
                    borderColor: ['rgba(180, 156, 115, 1)', 'rgba(50, 50, 50, 1)'], // Border colors for brown and black-gray
                    borderWidth: 2,
                }],
            },
            options: {
                scales: {
                    x: {
                        type: 'category',
                        labels: paymentData.labels,
                    },
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
</body>

</html>