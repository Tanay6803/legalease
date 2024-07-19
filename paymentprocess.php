<?php
session_start();
include_once('partials/_dbconnect.php');
$lawyeremail=$_POST['lawyeremail'];
$useremail=$_SESSION['email'];
$paymentid=$_POST['paymentid'];
$sql="INSERT INTO `payment`(`payment_id`,`user_email`, `lawyer_email`, `amount`, `payment_date`, `payment_time`) VALUES ('$paymentid','$useremail','$lawyeremail','999.00',current_timestamp(),current_timestamp())";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo 'done';
	$_SESSION['paymentid']=$paymentid;
}
else 
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>