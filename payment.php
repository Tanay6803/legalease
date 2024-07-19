<?php
session_start();
include_once('partials/_dbconnect.php');


if($_SERVER['REQUEST_METHOD']=='POST')
{
    $useremail=$_SESSION['email'];
    $lawyeremail=$_GET['email'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $info=$_POST['info'];
    $sql="INSERT INTO `booking_table`(`useremail`, `lawyeremail`, `dateofmeeting`, `preferred_time`, `Status`, `extra_info`) VALUES ('$useremail','$lawyeremail','$date','$time','Pending','$info')";
    $result2=mysqli_query($conn,$sql);
  if(!$result2)
  {
    echo "Error : ".mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Payment Gateway</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .payment-options {
            width: 300px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-right: 20px;
        }

        .payment-option {
            cursor: pointer;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            text-align: center;
            background-color: #f0f0f0;
            transition: background-color 0.3s ease;
        }

        .payment-option:hover {
            background-color: #e0e0e0;
        }

        .payment-details {
            flex: 1;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .payment-details h3 {
            margin-bottom: 10px;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }

        .payment-details p {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .payment-option-content {
            display: none;
        }

        .payment-option-content.active {
            display: block;
        }
    </style>
</head>
<body>
    <?php
  
    echo "<a href='javascript:void(0)' data-lawyeremail='$lawyeremail'  class='btn btn-lg btn-block btn-dark buynow'>Purchase</a>";
    ?>
    </div>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>

    $(".buynow").click(function () {

      var lawyeremail = $(this).attr('data-lawyeremail');

      var options = {
        "key": "rzp_test_V6AeC40NyZIjJ4", // Enter the Key ID generated from the Dashboard
        "amount": 999 * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "name": "LegalEase",
        "description": "lawyerpayment",
        "image": "https://example.com/your_logo",
        "handler": function (response) {
          var paymentid = response.razorpay_payment_id;

          $.ajax({
            url: "paymentprocess.php",
            type: "POST",
            data: { lawyeremail: lawyeremail, paymentid : paymentid},
            success: function (finalresponse) {
              if (finalresponse == 'done') {
                window.location.href = "http://localhost/legalease/index.php?success";
              }
              else {
                alert('Please check console.log to find error');
                console.log(finalresponse);
              }
            }
          })

        },
        "theme": {
          "color": "#3399cc"
        }
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();
      e.preventDefault();
    });
  </script>
</body>
</html>
