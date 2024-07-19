<?php
session_start();
include_once('partials/_dbconnect.php');
if(isset($_GET['bid'])){
    $bid=$_GET['bid'];
    $status=$_GET['status'];
    if($status=='accept')
    {
        $sql="UPDATE `booking_table` SET `Status`='Accept' WHERE `booking_id`=$bid";
    }
    elseif($status=='decline')
    {
        $sql="UPDATE `booking_table` SET `Status`='Declined' WHERE `booking_id`=$bid";
    }
    $result=mysqli_query($conn,$sql);
}
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

    <!--chart style -->
    <style>

.charts-container {
    display: flex;
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
}

.chart {
    width: 50%;
    padding: 20px;
    box-sizing: border-box;
}
    </style>
    <!-- Add this CSS in your head section -->
<style>
    /* Styles for the meeting requests section */
    .table th, .table td {
        text-align: center;
    }

    /* Styles for the graphs section */
    .graph-container {
        margin-top: 20px;
    }
</style>

</head>

<body>
    <!-- Header Start -->
   
    <?php
    include_once('partials/_lawyerheader.php');
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
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Welcome </h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Connect to clients with ease at LegalEase</h3>
                            <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="register.html">LogIn/SignUp</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Meeting Requests Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Meeting Requests</h6>
                <h1 class="mb-5">Manage Your Appointments</h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $lawyeremail=$_SESSION['email'];
                        $sql="SELECT * FROM `booking_table` WHERE `lawyeremail`='$lawyeremail'";
                        $result=mysqli_query($conn,$sql);
                        $num=mysqli_num_rows($result);
                        if($num>0)
                        {
                            $num=1;
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $clientemail=$row['useremail'];
                                $sql="SELECT * FROM `client` WHERE `email`='$clientemail'";
                                $result2=mysqli_query($conn,$sql);
                                $row2=mysqli_fetch_assoc($result2);
                                echo "<tr>
                                    <th scope='row'>$num</th>
                                    <td>".$row2['fname']." ".$row2['lname']."</td>
                                    <td>".$row['dateofmeeting']."</td>";
                                    $status=$row['Status'];
                                    if($status=='Pending')
                                    {
                                        echo "<td><span class='badge badge-warning'>Pending</span></td>
                                        <td>
                                            <a href='?bid=".$row['booking_id']."&status=accept'><button class='btn btn-sm btn-success'>Accept</button></a>
                                            <a href='?bid=".$row['booking_id']."&status=decline'><button class='btn btn-sm btn-danger'>Decline</button></a>
                                        </td>";
                                    }
                                    elseif($status=='Accept')
                                    {
                                        echo "<td><span class='badge badge-success'>Accepted</span></td>
                                        <td>
                                        <a href='?bid=".$row['booking_id']."&status=decline'><button class='btn btn-sm btn-danger'>Decline</button></a>
                                    </td>
                                </tr>";
                                    }
                                    elseif($status=='Declined'){
                                        echo "<td><span class='badge badge-danger'>Declined</span></td>
                                        <td>
                                        <button class='btn btn-sm btn-danger' disabled>Decline</button>
                                    </td>";
                                    }
                                    echo "</tr>";
                                $num+=1;
                            }
                        }
                    ?>
                    
                    <!-- Add more rows as needed -->
                </tbody>
            </table>

            <!-- Graphs Section -->
            
            <!-- <div class="mt-5">
                <h3>Performance Metrics</h3>
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="appointmentsChart" width="50" height="50"></canvas>
                    </div>
                    
                        <div class="chart">
                            <canvas id="meetingsPieChart" width="50" height="50"></canvas>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Meeting Requests End -->


    <!-- Footer Start -->
    <?php
        include_once('partials/_lawyerfooter.php');
    ?>
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

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        // Fetch data from your database (replace this with your actual data)
const bookingData = [30, 20, 15, 10, 25];
const averageRating = 4.2; // Assuming the average rating is 4.2 for Lawyer 1

// Pie Chart
const pieChartCanvas = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(pieChartCanvas, {
    type: 'doughnut',
    data: {
        labels: ['Lawyer 1', 'Lawyer 2', 'Lawyer 3', 'Lawyer 4', 'Lawyer 5'],
        datasets: [{
            data: bookingData,
            backgroundColor: ['#4CAF50', '#2196F3', '#FFC107', '#FF5722', '#9C27B0'],
        }],
    },
});

// Horizontal Bar Chart
const barChartCanvas = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(barChartCanvas, {
    type: 'horizontalBar',
    data: {
        labels: ['Lawyer 1'],
        datasets: [{
            label: 'Average Rating',
            data: [averageRating],
            backgroundColor: '#2196F3',
        }],
    },
    options: {
        scales: {
            x: {
                beginAtZero: true,
                max: 5, // Assuming ratings are out of 5
            },
        },
    },
});


    </script>
    <script>
        // Additional JavaScript for the meeting requests and graphs
    
        // Meeting Requests Table
        // You may need to enhance this script based on actual interactions with the server
        document.addEventListener("DOMContentLoaded", function () {
            const declineButtons = document.querySelectorAll('.btn-danger');
            const acceptButtons = document.querySelectorAll('.btn-success');
    
            declineButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Implement the decline logic here
                    //while connecting this data to be sent to the booking table if accepted,declined
                    alert('Request Declined!');
                    console.log('Decline clicked');
                });
            });
    
            acceptButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Implement the accept logic here
                    alert('Request Accepted!');
                    console.log('Accept clicked');
                });
            });
        });
    
        // Graphs using Chart.js
        document.addEventListener("DOMContentLoaded", function () {
            // Sample data for the graphs
            const appointmentsData = [15, 25, 30, 20, 10];
            const revenueData = [1000, 1500, 1200, 800, 2000];
    
            // Appointments Chart
            const appointmentsChartCanvas = document.getElementById('appointmentsChart').getContext('2d');
            const appointmentsChart = new Chart(appointmentsChartCanvas, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May'],
                    datasets: [{
                        label: 'Appointments',
                        data: appointmentsData,
                        borderColor: '#4CAF50',
                        borderWidth: 2,
                        fill: false,
                    }],
                },
            });
    
            
        });    
        // Graphs using Chart.js
        document.addEventListener("DOMContentLoaded", function () {
            // Sample data for the pie chart
            const meetingsData = [10, 5, 3]; // Accepted, Rejected, Hold
    
            // Pie Chart
            const pieChartCanvas = document.getElementById('meetingsPieChart').getContext('2d');
            const pieChart = new Chart(pieChartCanvas, {
                type: 'doughnut',
                data: {
                    labels: ['Accepted', 'Rejected', 'Hold'],
                    datasets: [{
                        data: meetingsData,
                        backgroundColor: ['#4CAF50', '#FF5722', '#2196F3'],
                    }],
                },
            });
        });
    </script>
    
</body>

</html>