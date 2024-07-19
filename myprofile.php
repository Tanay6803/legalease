<?php
session_start();
include_once('partials/_dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #000000, #2c3e50);
            color: #fff;
        }

        header, .profile-container {
            width: 300px;
            margin: 0 auto;
        }

        header {
            background: linear-gradient(to right, #4d2600, #704214);
            color: #fff;
            padding: 10px;
            text-align: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        section {
            margin: 20px;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: linear-gradient(to right, #fff, #f5f5f5);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .profile-info {
            padding: 20px;
            background: linear-gradient(to right, #fff, #f5f5f5);
            text-align: center;
        }

        .profile-info img {
            border-radius: 50%;
            margin-bottom: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border: 5px solid #fff;
        }

        .profile-info h2, .profile-info p {
            margin: 0;
        }

        .profile-info h2 {
            font-size: 1.5em;
            color: #4a4a4a; /* Dark gray */
        }

        .profile-info p {
            font-size: 1.2em;
            color: #6a6a6a; /* Lighter gray */
        }

        .profile-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            background: linear-gradient(to right, #4d2600, #704214);
            transition: opacity 0.3s;
            opacity: 0;
            pointer-events: none;
            padding: 20px;
        }

        .profile-container:hover .profile-actions {
            opacity: 1;
            pointer-events: auto;
        }

        button {
            padding: 10px;
            cursor: pointer;
            background: linear-gradient(to right, #704214, #5a3210);
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background-color 0.3s;
            width: 80%;
        }

        /* button:hover {
            background: linear-gradient(to right, #5a3210, #4a2b0f);
        } */
    </style>
</head>
<body>
    <header>
        <h1>Your Profile</h1>
    </header>
    <section>
        <div class="profile-container">
            <div class="profile-info">
                <img src="img\team-6.png" alt="Your Profile Photo" width="150">
                <h2>Your Name</h2>
                <p>Email: your.email@example.com</p>
            </div>
            <div class="profile-actions">
                <button id="editProfileBtn">Edit Profile</button>
                <button id="myBookingsBtn">My Bookings</button>
                <button id="signOutBtn">Sign Out</button>
            </div>
        </div>
    </section>

    <script>
        // Add your JavaScript functionality here
        document.getElementById('editProfileBtn').addEventListener('click', function() {
            alert('Edit Profile clicked!');
            // Add logic for edit profile functionality
        });

        document.getElementById('myBookingsBtn').addEventListener('click', function() {
            alert('My Bookings clicked!');
            // Add logic for my bookings functionality
        });

        document.getElementById('signOutBtn').addEventListener('click', function() {
            alert('Sign Out clicked!');
            // Add logic for sign out functionality
        });
    </script>
</body>
</html>
