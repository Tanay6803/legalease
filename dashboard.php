<?php
session_start();
include_once('partials/_dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .login-container {
      text-align: center;
    }

    .user-dashboard {
      display: none;
      text-align: center;
    }

    .avatar {
      border-radius: 50%;
      width: 100px;
      height: 100px;
      margin-top: 20px;
      cursor: pointer;
    }

    .menu-options {
      list-style-type: none;
      padding: 0;
      margin-top: 10px;
    }

    .menu-options li {
      display: inline-block;
      margin-right: 10px;
    }

    .menu-options a {
      text-decoration: none;
      color: #333;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="login-container">
    <h1>Login or Register</h1>
    <!-- Add your login or registration form here -->
    <button onclick="showUserDashboard()">Login</button>
  </div>

  <div class="user-dashboard" id="userDashboard">
    <img src="avatar.png" alt="User Avatar" class="avatar" onclick="showMenu()">
    <ul class="menu-options" id="menuOptions">
      <li><a href="#">Profile</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>
</div>

<script>
  function showUserDashboard() {
    document.querySelector('.login-container').style.display = 'none';
    document.querySelector('#userDashboard').style.display = 'block';
  }

  function showMenu() {
    var menuOptions = document.querySelector('#menuOptions');
    menuOptions.style.display = (menuOptions.style.display === 'block') ? 'none' : 'block';
  }
</script>

</body>
</html>
