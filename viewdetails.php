<?php
include("connection.php");
$mtcunique = $_POST['adid'];
$allInfo = "SELECT firstname,lastname,email,college,sap,number,address,city,course,examtaken FROM registerdusers WHERE random='$mtcunique' ";
$que=mysqli_query($conn,$allInfo);
$value=mysqli_fetch_array($que,MYSQLI_ASSOC);
$firstname = $value["firstname"];
$lastname = $value["lastname"];
$email = $value["email"];
$college = $value["college"];
$sap = $value["sap"];
$number = $value["number"];
$Address = $value["address"];
$City = $value["city"];
$course = $value["course"];
$examtaken = $value["examtaken"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MTA|UPES-MTC</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- //custom-theme -->
	<link href="css/style11.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style22.css" rel="stylesheet" type="text/css" media="all">
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- font-awesome-icons -->
	<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
	<!-- //font-awesome-icons -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<style>
		body { background : url('images/a1.jpg');
	background-size:cover;
	opacity:2 ;
	overflow:scroll;
	background-attachment:fixed;
	color: white;
	}
	.formcon {
    border-radius: 5px;
    background-color: black;
    padding: 20px;
    opacity: .65;
	}
	h1 {
  	color:white;
 	font-size: 3em;
 	text-align: center;
 	font-family: 'Lora', serif;
	}
	canvas{
  	height:60vh;
	}
</style>
</head>

<body>
	<!-- banner -->
	<div class="navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400" data-ix="move-down-on-load-1"
	 id="Top">
		<div class="container w-container" data-ix="move-down-on-load-1">
			<a class="brand w-nav-brand" href="index.html"><img class="img-responsive" src="images/MTC.png" width="200" height="70"></a>
		</div>
	</div>
	<!-- banner -->
	<div class="w3layouts_main_grid">
		<div class="formcon">
			<form action="register1.php" method="post" class="w3_form_post" onsubmit="return validateForm()">
				<h1>View Details</h1>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
						<label>First Name:</label>
						<?php echo $firstname; ?>
					</span>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
						<label>Last Name:</label>
                        <?php echo $lastname; ?>
					</span>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
						<label>Email:</label>
						<?php echo $email; ?>
					</span>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
						<span>
							<label>College:</label>
							<?php echo $college; ?>
						</span>
					</div>	
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
						<label>SAP-ID:</label>
						<?php echo $sap; ?>
					</span>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
						<label>Phone Number:</label>
						<?php echo $number; ?>
					</span>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
                        <label>Address:</label>
                        <?php echo $Address; ?>
					</span>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
						<label>City:</label>
						<?php echo $City; ?>
					</span>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
						<div><span><label>Did you took the exam earlier:</label></span></div>
						<?php echo $examtaken; ?>
					</span>
                </div>
                <br>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<span>
						<div><span><label>Course:<br></label></span></div>
                        <?php echo $course; ?>
                    </span>	
                </div>
			</form>
		</div>
	</div>
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker").datepicker();
		});
	</script>
	<!-- //Calendar -->
</body>
</html>
