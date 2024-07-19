<?php
session_start();
include_once('partials/_dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Reset</title>
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
    body {
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }

    .reset-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      text-align: center;
    }

    input {
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      box-sizing: border-box;
    }

    button {
      background-color: #B49C73;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #B49C72;
    }
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 50%;
      height: 17%;
      font-size: larger;
      font-weight: bolder;
      font-family: sans-serif;
    }

    .close-btn {
      cursor: pointer;
    }
  </style>
</head>

<body>
    
 <div class="container-fluid py-4">
        <div class="container py-4">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <img src="img/legaleaselogo.png" alt="logo" style="width: 100%; max-width: 85px; height: auto; display: block; margin: 0 auto;">
                            <h1 class="text-center text-white mb-4">Forgot Password</h1>
  <div class="reset-container">
    
    <p style="font-size: large;font-weight: bold;">Enter your email to reset your password.</p>
    <form id="resetForm">
      <input type="email" id="email" placeholder="Enter your email" required>
      <button type="button" onclick="sendResetLink()">Reset Password</button>
    </form>
    <p id="resetMessage"></p>
  </div>
  <div id="successModal" class="modal">
    <div class="modal-content">
      <span class="close-btn" onclick="closeModal()">&times;</span>
      <p>Password reset instructions have been sent to <span id="userEmail"></span>.</p>
    </div>
  </div>

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
    function sendResetLink() {
      var email = document.getElementById('email').value;

      // Check if the email is empty
      if (!email) {
        alert('Please enter your email.');
        return;
      }
       // Check if the email is valid
    if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
        return;
    }
      document.getElementById('userEmail').textContent = email;
      // Show the success modal
      openModal();
    }
    function validateEmail(email) {
      // Regular expression for basic email validation
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
    function closeModalAndRedirect() {
        // Redirect to the login page
        window.location.href = 'login.html';
    }


    function openModal() {
      document.getElementById('successModal').style.display = 'flex';
    }

    function closeModal() {
      document.getElementById('successModal').style.display = 'none';
      closeModalAndRedirect(); // Call the function to redirect to the login page
    }
  </script>
</body>
</html>
