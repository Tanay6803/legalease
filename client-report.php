<?php
session_start();
include_once('partials/_dbconnect.php');
if(isset($_POST['state']))
{
    $from=$_POST['joinDate'];
    $to=$_POST['toDate'];
    $state=$_POST['state'];
    if($state==0)
    {
        $state="%";
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
            <h1 class="text-center mb-4">Client Report</h1>
            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="state">State</label>
                        <select id="state" name="state" class="form-control">
                            <option selected value="0">Select State</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="joinDate">Date of Birth From</label>
                        <input type="date" id="joinDate" name="joinDate" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="toDate">To</label>
                        <input type="date" id="toDate" name="toDate" class="form-control">
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <button class="btn btn-primary">Print</button>
                </center>
            </form>
        </div>
        <!-- Admin Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="table-responsive">
                    <h1 class="text-center mb-4" style="background-color: rgb(47,49,52); color: #FDFAF0;">Client Report
                    </h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>D.O.B</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($_POST['state']))
                            {
                                if($from="")
                                {
                                    $sql="SELECT * FROM `client` WHERE `state` LIKE '$state'";
                                }
                                else{
                                    if($to="")
                                    {
                                        $to=date('Y-m-d');
                                        $sql="SELECT * FROM `client` WHERE `state` LIKE '$state' AND `DOB` BETWEEN '$from' and '$to'";
                                    }
                                    else{
                                        $sql="SELECT * FROM `client` WHERE `state` LIKE '$state' AND `DOB` BETWEEN '$from' and '$to'";
                                    }
                                }
                            }
                            else{
                                $sql="SELECT * FROM `client`";
                            }
                            $result=mysqli_query($conn,$sql);
                            $num=1;
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<tr>
                                    <td>$num</td>
                                    <td>".$row['fname']." ".$row['lname']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['phonenumber']."</td>
                                    <td>".$row['address'].",".$row['city'].",".$row['state']."</td>
                                    <td>".$row['DOB']."</td>
                                </tr>";
                                $num+=1;
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