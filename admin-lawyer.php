<?php
session_start();
include_once('partials/_dbconnect.php');
if(isset($_GET['lid']))
{
    $email=$_GET['lid'];
    $sql="DELETE FROM `lawyer` WHERE `email`='$email'";
    $result=mysqli_Query($conn,$sql);
    if($result)
    {
        echo "Lawyer Deleted Successfullu!";
    }
    else{
        echo "Error in deleting lawyer : ".mysqli_error($conn);
    }
}
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
    <div class="container-fluid py-5">
        <div class="container py-5">
      <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">LAWYER</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Phone Number</th>
                                    <th>BCI ID</th>
                                    <th>Practice Areas</th>
                                    <th>Password</th>
                                    <th>Profile Picture</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                    $sql="SELECT * FROM `lawyer`";
                    $result=mysqli_query($conn,$sql);
                    $num=1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr>
                            <td>$num</td>
                            <td>".$row['fname']." ".$row['lname']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['dob']."</td>
                            <td>".$row['address']."</td>
                            <td>".$row['city']."</td>
                            <td>".$row['state']."</td>
                            <td>".$row['phonenumber']."</td>
                            <td>".$row['bci_id']."</td>
                            <td>".$row['practice_area']."</td>
                            <td><img src='".$row['profilephoto']."' alt='Profile Picture'></td>
                            <td>
                                <a href='?lid=".$row['email']."'><button class='btn btn-danger'>Delete</button></a>
                            </td>
                        </tr>";
                        $num+=1;
                    }
                    ?>
                                
                            </tbody>
                        </table>
            </div>
        </div>
    </div>

   <!-- Add this section for the Bar Chart -->
<!-- <div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="color: blanchedalmond; background-color: #303030;"><center></center></h1>
           
        </div>
    </div>
</div> -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">LAWYER's JOINED PER MONTH</h1>
        <canvas id="lawyerBarChart" height="100" style="height: 30%; width: 40%; margin: 0 5%;"></canvas>
    </div>
</div>
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-0 px-sm-0 px-md-0" >
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

    
<!-- Bar Chart Script -->
<script>
    // Dummy data (replace with actual data from MongoDB)
    var lawyerData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        lawyersJoined: [5, 8, 12, 10, 15, 20, 18],
    };

    // Get the canvas element and initialize the chart
    var lawyerCtx = document.getElementById('lawyerBarChart').getContext('2d');
    var lawyerBarChart = new Chart(lawyerCtx, {
        type: 'bar',
        data: {
            labels: lawyerData.labels,
            datasets: [
                {
                    label: 'Lawyers Joined',
                    data: lawyerData.lawyersJoined,
                    backgroundColor: 'rgba(180, 156, 115, 0.5)', // Adjust color to match your palette
                    borderColor: 'rgba(180, 156, 115, 1)', // Adjust color to match your palette
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                x: {
                    type: 'category',
                    labels: lawyerData.labels,
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
</script>

</body>

</html>