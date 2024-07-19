<?php
session_start();
include_once('partials/_dbconnect.php');
$email=$_SESSION['email'];
$sql="SELECT * FROM `client` WHERE `email`='$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $newemail=$_POST['email'];
    $password=$_POST['password'];
    $newpassword=$_POST['newpassword'];
    $sql="UPDATE `client` SET `fname`='$fname',`lname`='$lname',`email`='$newemail',`password`='$newpassword' WHERE `email`='$email'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "Profile Updated Successfully!";
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

    
<style>
    /* body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
} */

.profile-navigation {
    background-color: #333;
    color: #fff;
    height: 70vh;
    width: 20%;
    float: left;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 5px;
}

.profile-navigation ul {
    list-style: none;
    padding: 0;
}

.profile-navigation li {
    padding: 10px;
    cursor: pointer;
}

.profile-content {
    box-sizing: border-box;
    border-radius: 5%;
    float: left;
    width: 80%;
    padding: 20px;
}
.hidden {
    display: none;
}
#logoutContent{
    text-align: center;
}
#logoutButton{
    margin-top: 40px;
    /* width: 20%; */
}
/* Main Content Section */
.profile-content {
    display: flex;
    justify-content: center;
}

/* Common styles for content */
.profile-content > div{
    box-sizing: border-box;
    border-color: #333;
    border: 10px; 
    text-align: center;
}

/* Styling for User Profile Section */
.user-profile {
    margin-bottom: 20px;
}

/* Styling for Profile Picture or Initials */
.profile-picture {
    position: relative;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto;
    color: #fff;
    background-color: #888;
}

.profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.initials {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 24px;
    color: #fff; /* Text color for initials */
}
</style>
</head>

<body>
     <!-- Header Start -->
     <?php 
    include_once('partials/_header.php');
    ?>
    <!-- Header End -->

     <!-- Main Content Section -->
     <div class="container-fluid py-4">
        <div class="container py-4">
            <!-- <div class="text-center pb-2">
                <h1 class="mb-4">Your Profile</h1>
            </div> -->
            <!-- Left-side Navigation Bar -->
            <div class="profile-navigation">
                <div class="user-profile">
                    <!-- User profile picture or initials -->
                    <div class="profile-picture">
                        <!-- Use user's profile picture if available, otherwise use initials -->
                        <!-- Replace 'user_profile_picture.jpg' with the actual path to the user's profile picture -->
                        <img src="user_profile_picture.jpg" alt="Profile Picture" onerror="this.style.display='none';">
                        <div class="initials"><?php
                        $fname=$row['fname'];
                        $lname=$row['lname'];
                        echo $fname[0]."".$lname[0];
                        
                        ?></div> <!-- Replace with user's initials -->
                    </div>
                    <!-- User's name -->
                    <h4 style="color: white; text-align: center; margin-top: 10px;"><?php echo $row['fname']." ".$row['lname']; ?></h4> 
                </div>
                <ul>
                    <li id="editProfile">Edit Profile</li>
                    <li id="myBookings">My Bookings</li>
                    <a href="logout.php"><li>Log Out</li></a>
                </ul>
            </div>
            
            <!-- Main Content Section -->
            <div class="profile-content">
                <!-- Content for Edit Profile option -->
                <div id="editProfileContent"  >
                    <h3>Edit Profile</h3>
                    <!-- <div class="container-fluid py">
                        <div class="container py"> -->
                            <div class="bg-appointment rounded">
                                <!-- <div class="align-items-center justify-content-center"> -->
                                    <div class="col-l-6 p-5">
                                        <div class="rounded p-0 my-0" style="background: rgba(55, 55, 63, .7);">
                                                <!-- <img src="img/legaleaselogo.png" alt="logo" style="width: 100%; max-width: 85px; height: auto; display: block; margin: 0 auto;">
                                                <h1 class="text-center text-white mb-4">SignUp</h1> -->
                                            <form id="editProfile" method="post">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-0 p-4" placeholder="Update First Name" title="Enter your first name" name="fname" value="<?php echo $row['fname']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-0 p-4" placeholder="Update Last Name" title="Enter your last name" name="lname" value="<?php echo $row['lname']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control border-0 p-4" placeholder="Email" name="email" value="<?php echo $row['email']; ?>"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <input type="text" class="form-control border-0 p-4" placeholder="Address" required="required" />
                                                </div> -->
                                                <div class="form-group">
                                                    <input type="password" id="password" class="form-control border-0 p-4" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one lowercase and one uppercase letter, and be at least 8 characters long." name="password" required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" id="password" class="form-control border-0 p-4" placeholder="Your New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one lowercase and one uppercase letter, and be at least 8 characters long." required="required" name="newpassword" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" id="confirmPassword" class="form-control border-0 p-4" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one lowercase and one uppercase letter, and be at least 8 characters long." required="required"  name= "cnewpassword" oninput="checkPasswordMatch()" />
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit" href="">Update Profile</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>

                <!-- Content for My Bookings option -->
                <div id="myBookingsContent" class="hidden">
                    <h3><center>My Bookings</center></h3>
                    <!-- Dummy Booking Information -->
                    <div class="booking-info-container">
                        <?php
                        $sql="SELECT * FROM `booking_table`";
                        $result=mysqli_query($conn,$sql);
                        $number=1;
                        while($bookingrow=mysqli_fetch_assoc($result))
                        {
                            $e=$bookingrow['lawyeremail'];
                            $s="SELECT * FROM `lawyer` WHERE `email`='$e'";
                            $r=mysqli_query($conn,$s);
                            $row2=mysqli_fetch_assoc($r);
                            echo "<div class='booking-info'>
                            <h4>Booking $number</h4>
                            <p>Date: ".$bookingrow['dateofmeeting']."</p>
                            <p>Time: ".$bookingrow['preferred_time']."Hrs</p>
                            <p>Attorney: ".$row2['fname']." ".$row2['lname']."</p>
                            </div>";
                            $number+=1;
                        }
                        ?>
                        <!-- Add more booking information as needed -->
                    </div>
                </div>
                <style>
                    /* Additional CSS for Booking Information Container */
.booking-info-container {
    float: left;
    width: 70%; /* Width set to 70% */
    padding: 20px;
    background-color: #333; /* Background color for the container */
    border: 1px solid #ccc; /* Border */
    border-radius: 5px; /* Border radius */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1); /* Box shadow for a slight elevation effect */
    margin-right: 20px; /* Margin to create space between the container and other elements */
    margin-left: 20px;
    overflow: auto; /* Enable scrolling if content overflows */
}

.booking-info-container h3 {
    color: #333; /* Color for heading */
    font-size: 24px; /* Font size for heading */
    margin-bottom: 15px; /* Bottom margin for spacing */
}

.booking-info-container p {
    color: #666; /* Color for paragraph text */
    font-size: 16px; /* Font size for paragraph text */
    line-height: 1.6; /* Line height for better readability */
}

.booking-info-container .booking-item {
    margin-bottom: 15px; /* Bottom margin for each booking item */
}

.booking-info-container .booking-item h4 {
    color: #555; /* Color for sub-heading */
    font-size: 18px; /* Font size for sub-heading */
    margin-bottom: 8px; /* Bottom margin for spacing */
}

.booking-info-container .booking-item p {
    color: #777; /* Color for booking item details */
    font-size: 14px; /* Font size for booking item details */
}

                </style>

                <!-- Content for Log Out option -->
                <div id="logoutContent" class="hidden">
                    <h3>Log Out</h3>
                    <h6>Click here to securely log out from your account.</h6> 
                    <a href="index.html" class="btn btn-primary mr-3 d-none d-lg-block" id="logoutButton">Log Out</a>
                </div>
            </div>


        </div>
    </div>
    <!-- Main Content Section End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        function handleSearch() {
            var searchInputValue = document.getElementById('searchInput').value;
            // Use the searchInputValue for searching or any other desired action
            console.log('Searching for:', searchInputValue);
        }
    </script>
        <!-- Add your scripts at the end of the body -->
        <script>
            // JavaScript to handle button clicks and show related content
            document.getElementById('editProfile').addEventListener('click', function () {
                showContent('editProfileContent');
            });
    
            document.getElementById('myBookings').addEventListener('click', function () {
                showContent('myBookingsContent');
            });
    
            document.getElementById('logout').addEventListener('click', function () {
                showContent('logoutContent');
            });
    
            function showContent(contentId) {
                // Hide all content divs
                var allContent = document.querySelectorAll('.profile-content > div');
                allContent.forEach(function (content) {
                    content.classList.add('hidden');
                });
    
                // Show the selected content
                document.getElementById(contentId).classList.remove('hidden');
            }
    
        </script>
    <script>
        // Function to handle saving changes
        function saveChanges() {
            // Get values from the form
            var newProfilePicture = document.getElementById('profilePicture').value;
            var newUserName = document.getElementById('userName').value;
            var newNumberValue = document.getElementById('numberBox').value;
            var newEmailValue = document.getElementById('emailBox').value;
    
            // Update the display (replace this with actual logic to save changes)
            document.getElementById('currentProfilePicture').src = newProfilePicture || 'default-profile-picture.jpg';
            // Update other display elements...
    
            // Display a success message or perform further actions
            alert('Changes saved successfully!');
        }
    </script>
        
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
