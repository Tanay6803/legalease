<?php
session_start();
include_once('partials/_dbconnect.php');
$useremail=$_SESSION['email'];
$lawyeremail=$_GET['email'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $rate=$_POST['rate'];
    $feedback=$_POST['feedback'];
    $sql="INSERT INTO `feedback`(`feedback_ratings`, `feedback_text`, `user_email`, `lawyer_email`) VALUES ($rate,'$feedback','$useremail','$lawyeremail')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "Reviwed Successful!";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book an Appointment</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <?php 
    include_once('partials/_header.php');
    ?>
    <!-- Header End -->

    <!-- Feedback Page Start -->
    
    <div class="container mt-5">
        
        <!-- <div class="container-fluid py-15"> -->
            <!-- <div class="container py-15"> -->
                <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-1">
                    <h2 class="mb-4">Feedback</h2>
        <div class="bg-appointment rounded">
            <div class="rounded p-5 my-5" style="background: rgba(15, 15, 15, 0.7);">
                <form method="post">
                    <div class="form-group">
                        <label for="clientEmail">Your Email Address</label>
                        <input type="email" class="form-control" value="<?php echo $useremail; ?>" id="clientEmail" placeholder="Enter your email address" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Your Feedback Comment</label>
                        <textarea class="form-control" id="comment" rows="3" placeholder="Enter your feedback comment" name="feedback" required></textarea>
                    </div>
                        <div class="form-group">
                            <label for="ratings">Your Ratings (0-5)</label>
                            <input type="range" class="form-control-range" id="ratings" min="0" max="5" step="1" name="rate" value="0" required>
                            <output for="ratings" id="ratingsValue">0</output>
                        </div>
                        <div class="form-group" style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Submit Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        const ratingsInput = document.getElementById('ratings');
        const ratingsValueOutput = document.getElementById('ratingsValue');
    
        ratingsInput.addEventListener('input', () => {
            ratingsValueOutput.textContent = ratingsInput.value;
        });
    </script>
    
    
    <!-- Feedback Page End -->

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
</body>

</html>
