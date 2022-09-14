<?php
	$message_sent = false;
	if(isset($_POST['email']) && $_POST['email'] != ''){
		
		if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
		
			//submit the form
				$userName = $_POST['name'];
				$userEmail = $_POST['email'];
				$messageSubject = $_POST['subject'];
				$message = $_POST['message'];

				$to = "techrat@protonmail.com";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ab986b9a39.js" crossorigin="anonymous"></script>
    <title>Contact</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header_title">
        <div class="header-toggle">
            <a class="header_name" href="index.html">
                <h1 class="pers_name">Ben H Art</h1>
            </a>
            <a for="nav-toggle" type="button" name="button" class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <nav class="header_nav">
            <ul role="menubar" class="nav-list nav-links show-links" id="nav-links">
                <li role="presentation">
                   <a href="./who.html" role="menuitem" class="nav-link nav-list__item nav-list__item--visited nav-list__item--hover nav-list__item--active  scroll-link">WIE</a>
                </li>
                <li role="presentation">
                   <a href="./where.html" role="menuitem" class="nav-link nav-list__item nav-list__item--visited nav-list__item--hover nav-list__item--activenav-link scroll-link">WAAR</a>
                </li>
                <li role="presentation">
                   <a href="./what.html" role="menuitem" class="nav-link nav-list__item nav-list__item--visited nav-list__item--hover nav-list__item--active scroll-link">WAT</a>
                </li>
                <li role="presentation">
                   <a href="./contact.html" role="menuitem" class="nav-link nav-list__item nav-list__item--visited nav-list__item--hover nav-list__item--active scroll-link">CONTACT</a>
                </li>
            </ul>
        </nav>
    </header>
        <section class="information">
            <h1 class="information__header">Voor meer informatie neem contact voor een <span title=" cup of coffee"> &#x2615; </span>!</h1>
          <!-- contact form -->
            <?php
            if($message_sent):
            ?>
      
              <h1>Tijd Voor koffie</h1>
      
            <?php
            else:
            ?>
            <div class="form-flexboxcontainer">
              <form class="contact-form" action="email.php" method="POST" class="form">
              <!-- name -->
                <label class="contact-label" for="fullname">
                  <span>Volledige naam</span>
                  <abbr title="required">*</abbr>
                </label>
                <input type="text" name="fullname" class="information__fullname" id="fullname" placeholder="Fullname" required>
              <!-- email -->
                <label class="contact-label" for="email">
                  <span>Het emailadres</span>
                  <abbr title="required">*</abbr>
                </label>
                <input type="email" name="email" class="information__email" id="email" placeholder="Your email" required>
              <!-- subject -->
                <label class="contact-label" for="subject">
                  <span>Onderwerp</span>
                </label>
                <input type="text" name="subject" class="information__subject" id="subject" placeholder="Subject" >
              <!-- message -->
                <label class="contact-label" for="message">
                  <span>Uw bericht of vraag</span>
                  <abbr title="required">*</abbr>
                </label>
                <textarea name="message" id="message" class="information__message" rows="4" cols="30" maxlength="240" placeholder="A message or question in 240 words" required>
                </textarea>
              <!-- button -->
                <button class="form-btn" type="submit" value="Submit">Verstuur</button>
              </form>
            </div>
            <?php
            endif;
            ?>
          <!-- end of contact-form -->
            <div class="contact-information">
            <!-- contact information -->
              <div class="contact-information__item1">
                Benno Oude Wesselink<br>
                Broekhaven 13<br>
                1215 LL Hilversum<br>
                Nederland
              </div>
              <div class="contact-information__item2">
              <!-- email -->
                <label id="personal-email">Email:</label>
                <a class="contact-information__mail contact-information__mail--visited contact-information__mail--active contact-information__mail--hover" href="mailto:info@benhart.nl">info@benhart.nl</a>
              <!-- telephone -->
                <label id="personal-number">Telephone:</label>
                <a class="contact-information__tel contact-information__tel--visited contact-information__tel--active contact-information__tel--hover" href="tel:+31640407960" aria-label="telephone number" >+31640407960</a>
              <!-- contact me -->
                <a id="agency-email" href="mailto:bow.relax64@gmail.com">Contact me</a>
              </div>
            </div>
          </section>
    <footer class="page-footer">
        <p class="find-me">Find me on</p>
        <!-- list of social media icons -->
        <div class="social-media">
          <!-- github -->
          <!-- <img src="img/github_icon.svg" alt="logo github" class="icons"/> -->
          <a class="icon" aria-label="icon" href="https://www.facebook.com/benno.oudewesselink"><i class="fa-brands fa-facebook-f"></i></i></a>
          <!-- linkedin -->
          <!-- <img src="img/linkedin_icon.svg" alt="logo linkedin" class="icons"/> -->
          <a class="icon" aria-label="icon" href="https://www.linkedin.com/in/benno-oude-wesselink-18934422/"><i class="fa-brands fa-linkedin"></i></a>
          <a class="icon" aria-label="icon" href="https://www.instagram.com/artbenno123/"><i class="fa-brands fa-instagram"></i></a>
          <a class="icon" aria-label="icon" href="https://wa.me/31640407960"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <!-- end of list -->
      </footer>
    <script src="js/js.js"></script>
</body>
</html>