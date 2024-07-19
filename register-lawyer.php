<?php
session_start();
include_once('partials/_dbconnect.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $bciid=$_POST['bciid'];
    $practise=$_POST['practise'];
    $about=$_POST['about'];
    if ($_FILES["image"]["size"] > 1048576) {
        exit('File too large (max 1MB)');
    }
    
    // Use fileinfo to get the mime type
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime_type = $finfo->file($_FILES["image"]["tmp_name"]);
    
    $mime_types = ["image/gif", "image/png", "image/jpeg", "image/jpg"];
            
    if ( ! in_array($_FILES["image"]["type"], $mime_types)) {
        exit("Invalid file type");
    }
    
    // Replace any characters not \w- in the original filename
    $pathinfo = pathinfo($_FILES["image"]["name"]);
    
    $base = $pathinfo["filename"];
    
    $base = preg_replace("/[^\w-]/", "_", $base);
    
    $filename = $base . "." . $pathinfo["extension"];
    
    $destination = __DIR__ . "/img" . $filename;
    
    $image="/LegalEase/img/".$filename;
    // echo $destination;
    
    // Add a numeric suffix if the file already exists
    $i = 1;
    
    while (file_exists($destination)) {
    
        $filename = $base . "($i)." . $pathinfo["extension"];
        $destination = __DIR__ . "/img/" . $filename;
        $image="/LegalEase/img/".$filename;
        $i++;
    }
    
    if ( ! move_uploaded_file($_FILES["image"]["tmp_name"], $destination)) {
    
        exit("Can't move uploaded file");
    
    }
   

    $sql="INSERT INTO `lawyer`(`fname`, `lname`, `email`, `dob`, `pincode`, `address`, `city`, `state`, `phonenumber`, `bci_id`, `practice_area`, `profilephoto`, `password`, `about`) VALUES ('$fname','$lname','$email','$dob',$pincode,'$address','$city','$state','$phone','$bciid','$practise','$image','$password','$about')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("refresh:1; url=login-lawyer.php");
    }
    else{
        echo "Error : ".mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LegalEase/register-lawyer</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <style>
        /* .select2-container--default .select2-selection--multiple {
            border: none;
            background-color: transparent;
            border-bottom: 1px solid #ced4da;
        } */
    
        .select2-container--default .select2-results__option:hover,
        .select2-container--default .select2-results__option[aria-selected=true] {
            background-color: #B49C73; /* Change hover and selected color */
        }

        .select2-container--default .select2-selection__choice {
            background-color: #B49C73;
            /* border: none; */
        }
    
        .select2-container--default .select2-selection__choice__remove {
            color: #fff;
            cursor: pointer;
        }
    
        /* .select2-container--default .select2-selection--multiple .select2-selection__rendered {
            margin: 0;
        } */
    
        /* .select2-container--default .select2-selection--multiple .select2-selection__choice[title="Select Your Practice Area"] {
            display: none;
        } */
    
        /* .select2-container--default.select2-container--open .select2-selection--multiple {
            border-bottom: none;
        } */
    </style>
    
</head>

<body>
    <!-- Header Start -->
    <?php 
    include_once('partials/_header.php');
    ?>
    <!-- Header End -->

<!-- Registration Form Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <img src="img/legaleaselogo.png" alt="logo" style="width: 100%; max-width: 85px; height: auto; display: block; margin: 0 auto;">
                            <h1 class="text-center text-white mb-4">SignUp</h1>
                            <form id="lawyerRegistrationForm" enctype="multipart/form-data" action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="First Name" name="fname" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Last Name" name="lname" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required" name="email" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="date" class="form-control border-0 p-4" placeholder="Date of Birth" required="required" name="dob" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control border-0 p-4" placeholder="Pincode" pattern="[0-9]{6}" title=" Enter 6 digit pin code"required="required" name="pincode" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Address" required="required" name="address" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control border-0 p-4" placeholder="City" name="city" required="required" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control border-0 p-4" placeholder="State" name="state" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Phone Number" name="phone" pattern="[0-9]{10}"required="required" />
                                </div>
                                <div class="form-group" >
                                    <!-- <label for="bciImage" style="color: #fff; font-weight: bold;">Upload BCI ID Card provided by Bar Council of India</label>
                                    <input type="file" id="bciImage" class="form-control border-0 p-4" accept="image/*" required="required" /> -->
                                    <input type="text" class="form-control border-0 p-4" placeholder="BCI issued unique ID number" name="bciid" required="required" />
                                </div>
                                <div class="form-group">
                                    <!-- <select class="form-control border-0 p-4" id="practiceAreaSelect">
                                        <option selected aria-disabled value="">Select Your Practice Area</option>
                                        <option value="1">Criminal Law</option>
                                        <option value="2">Civil Law</option>
                                        <option value="3">Family Law</option>
                                        <option value="4">Business Law</option>
                                    </select> -->
                                    <input type="text" class="form-control border-0 p-4" placeholder="Practise Area" name="practise" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control border-0 p-4" placeholder="Add a Profile Picture" name="image" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control border-0 p-4" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one lowercase and one uppercase letter, and be at least 8 characters long." name="password" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" id="confirmPassword" class="form-control border-0 p-4" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one lowercase and one uppercase letter, and be at least 8 characters long." required="required" oninput="checkPasswordMatch()" />
                                </div>
                                <input type="text" class="form-control border-0 p-4" placeholder="About" name="about" required="required" />
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit" href="lawyer-booking.php">SignUp</button>
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Already Registered? </p><a href="login.php" style="display: inline;">SignIn</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Registration Form End -->

<!-- Footer Start -->
<?php
        include_once('partials/_footer.php');
    ?>
    <!-- Footer End -->

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

     <script>
        $(document).ready(function () {
            $('#practiceAreaSelect').select2({
                placeholder: 'Select Your Practice Area',
                allowClear: true,
                tags: true
            });
        });
    </script>

     <!-- password check javascript -->
     <script>
        function checkPasswordMatch() {
            var password = document.getElementById("password");
            var confirmPassword = document.getElementById("confirmPassword");
    
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords do not match");
            } else {
                confirmPassword.setCustomValidity("");
            }
        }
    </script>

     <!-- <script>
        $(document).ready(function () {
            $('#practiceAreaSelect').select2({
                placeholder: 'Select Your Practice Area',
                allowClear: true
            });
    
            // Hide the disabled option when the select2 dropdown is opened
            // $('#practiceAreaSelect').on('select2:opening', function (e) {
            //     $('option[value=""][disabled]').hide();
            // });
    
            // Show the disabled option when the select2 dropdown is closed
            // $('#practiceAreaSelect').on('select2:closing', function (e) {
            //     $('option[value=""][disabled]').show();
            // });
        }); -->
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Select2 CSS and JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

</body>
</html>