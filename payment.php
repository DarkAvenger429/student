<?php
include("connection.php");
$transaction = $_POST['transaction'];
$uniqueid = $_POST['uniqueid'];
//random number
$temp=false;
$errMsg1=$errMsg2="";
if($temp==true)
{
  echo "<script> alert('$errMsg1$errMsg2');window.location='register.html'; </script>";
}
$allInfo = "INSERT INTO payments(transaction,uniqueid) VALUES('$transaction','$uniqueid')";
if(mysqli_query($conn,$allInfo))
{
    echo "";
}
else
{
    echo "Error Created" . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Thank you for Your Payment|UPES-MTC</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);</script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<style>
    body{
        background:black;
        color:white;
    }
    h1{
        color:white;
    }
    h2{
        color:white;
    }
    </style>
</head>
<body>
    
	<!-- banner -->
    <div class="center-container">
        <div class="main" class="buttons">
            <span><h1 class="w3layouts_head">Payment Status:<button class="pulse">Not-Verified</button></h1></span>
            <h2 class="w3layouts_head">Don't Worry We will get back to you</h2>
            <div class="buttons">
                <a href="index.html"><button class="raise">Thank-You</button></a>
            </div>
        </div>  
    </div>
        <!-- Calendar -->
            <link rel="stylesheet" href="css/jquery-ui.css" />
                <script src="js/jquery-ui.js"></script>
                    <script>
                        $(function() {
                            $( "#datepicker" ).datepicker();
                        });
                    </script>
        <!-- //Calendar -->
<!-- //footer -->
</body>
</html>
