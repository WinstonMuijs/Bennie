<?php
	$message_sent = false;
	if(isset($_POST['email']) && $_POST['email'] != ''){
		
		if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
		
			//submit the form
				$userName = $_POST['name'];
				$userEmail = $_POST['email'];
				$messageSubject = $_POST['subject'];
				$message = $_POST['message'];

				$to = "Winston@kunstbijen.nl";
			    $body = "";
		
				$body .="From: ".$userName. "\r\n";
				$body .="Email: ".$userEmail. "\r\n";
				$body .="Message: ".$message. "\r\n";

				mail($to,$messageSubject,$body);
			    
			
		  		$message_sent = true;
		  }
	  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
	<?php
	if($message_sent):
    ?>
	<section class="formpage">
		<div class="container">
		 
		  		<h1 class="header1">Tijd Voor koffie</h1>
				<a class="home-btn" href="index.php">Home</a>
		</div>	
	</section>
	<?php
    else:
	?>
	<?php
	endif;
    ?>
</body>
</html>