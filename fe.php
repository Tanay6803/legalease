<?php
session_start();
include_once('partials/_dbconnect.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $from=$_POST['joinDate'];
    $to=$_POST['toDate'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Feedback Report</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="legaleaselogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    th,
    td {
        white-space: nowrap;
    }

    img {
        width: 50px;
        height: 45px;
    }

    .container-fluid.py-5 {
        padding-top: 20px;
        margin-top: -70px;
        /* Adjust padding top */
    }

    .container-fluid.py-5 .container.py-5 {
        padding-bottom: 100px;
        /* Adjust bottom padding */
    }

    .form-group {
        margin-bottom: 30px;
        /* Adjust margin between form groups */
    }

    .table-responsive {
        margin-top: -50px;
        /* Adjust margin top of table */
    }
    </style>
</head>

<body>
    <!-- Header Start -->
    <?php
            include_once("partials/_adminheader.php");
        ?>
    <!-- Header End -->
    <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <h1 class="text-center mb-4">Feedback Report</h1>
            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="joinDate">Date of Joining from</label>
                        <input type="date" id="joinDate" name="joinDate" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="toDate">To</label>
                        <input type="date" id="toDate" name="toDate" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
                <button type="submit" class="btn btn-primary">Print</button>
            </form>
        </div>
        <!-- Admin Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="table-responsive">
                    <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">Feedback
                        Report</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Client Email</th>
                                <th>Lawyer Email</th>
                                <th>Feedback</th>
                                <th>Ratings</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                if($_SERVER['REQUEST_METHOD']=='POST')
                                {
                                    if($from="")
                                    {
                                        $sql="SELECT * FROM `feedback`";
                                    }
                                    else{
                                        if($to="")
                                        {
                                            $to=date('Y-m-d');
                                            $sql="SELECT * FROM `feedback`";
                                        }
                                        else{
                                            $sql="SELECT * FROM `feedback`";
                                        }
                                    }
                                }
                                else{
                                    $sql="SELECT * FROM `feedback`";
                                }
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_Assoc($result))
                                {
                                    echo "<tr>
                                        <td>".$row['feedbackid']."</td>
                                        <td>".$row['user_email']."</td>
                                        <td>".$row['lawyer_email']."</td>
                                        <td>".$row['feedback_text']."</td>
                                        <td>".$row['feedback_ratings']."</td>
                                    </tr>";
                                }
                            ?>
                            
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Admin Page End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-0 px-sm-0 px-md-0">
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">LegalEase</a>. All Rights
                    Reserved.</p>
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

</body>

</html>