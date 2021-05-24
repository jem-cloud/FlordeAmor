<?php include 'sendmail.php'; ?>
<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   	<link rel="shortcut icon" type="image/jpg" href="img\logo.png"/>
    <title>Flor De Amor - Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpg" href="img\logo.png"/>
    <link rel="stylesheet" href="style123.css">
   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 		crossorigin="anonymous">
    
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

	<link href="https://fonts.googleapis.com/css?family=Segoe+UI&display=swap" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Newsreader&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Lateef&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Abril				+Fatface&family=Lobster&family=Newsreader&family=Sigmar+One&family=Yeseva+One&display=swap" 				rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@300&display=swap" rel="stylesheet">
	
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">   

<style>
#form input[type=text], select, textarea {
  width: 100%;
  border-radius: 10px;
  padding: 12px; 
  border: 2px solid #fa9898; 
  box-sizing: border-box; 
  margin-top: 6px;
  margin-bottom: 16px; 
  resize: vertical;
  background-color:white;
  
}

#form input[type=submit] {
  background-color: #fa9898;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#form input[type=submit]:hover {
  opacity: 0.5;
}

@keyframes pulse {
0%   {transform: scale(1.0)}
50%   {transform: scale(1.1)} 
100% {transform: scale(1.0)}
}    

#form {
  float: right;
  border-radius: 10px;
  background-color: #ffdbe0;
  padding: 30px;
  width: 50%;
  padding-right: 50px;
  margin-bottom:50px;
}

#reviews{
    float:left;
    border-radius: 5px;
    padding-left: 20px;
    padding-bottom: 50px;
    width: 40%;
    text-align: right;
    border-radius:  20px;
}

label{
    font-family: 'Montserrat';
}



#quotes{
    width: 30%; 
    padding-top: 20px;
    padding-bottom: 20px; 
    animation-name: pulse;
    animation-duration: 2s;
    animation-iteration-count: infinite;
}

.bag{
    padding: 50px 50px 50px 50px;
	margin: 50px;
	margin-bottom: 50px;
    }

  #clientname{
  text-align: left;
  font-family: 'Vogue';
  font-weight: bold;    
  overflow: hidden; 
  border-right: .15em solid #f7c948; 
  margin: 0 auto;
  white-space: nowrap;    
  letter-spacing: .5em; 
  animation: 
    typing 5s steps(40, end),
    blink-caret .75s step-end infinite;
    }

    @keyframes typing {
      from { width: 0 }
      to { width: 100% }
    }

    @keyframes blink-caret {
      from, to { border-color: transparent }
      50% { border-color: #f7c948; }
    }

 #clientreview{
     padding: 10px;
     font-size: 14px;
     font-family: 'Montserrat';
 }

 #footerbyzia {
  display: inline-block;
  left: 0;
  bottom: 0;
  height: 180px;
  width: 100%;
  background-color: PINK;
  color: WHITE;
  font-size: 80px;
  text-align: center;
  font-family: 'Vogue';
 }
 .scrolltop{
  
  background:#b86a55;
  position: fixed;
  bottom: 16px;
  right: 32px;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 32px;
  color: white;
  text-decoration: none;
  opacity: 0;
  pointer-events: none;
  transition: all .4s;


}

.scrolltop.active{
  
  bottom: 32px;
  pointer-events: auto;
  opacity: 1;
  text-decoration: none;

}

html{
  scroll-behavior:smooth;
}

</style>    
</head>

<body>

  <?php echo $alert; ?>

  <a href="#" class = "scrolltop">
    <i class = "fas fa-chevron-up"></i>

  </a>
  <script src = "scrolltop.js"></script>
	<div class="header">
		<nav>
		  <ul class="nav justify-content-center">
			<li class="nav-item" style="padding-left: 40px;">
			  <a class="nav-link" href="index.php">HOME</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about.php">ABOUT</a>
			</li>
			 <div class="vl"></div>
			<li class="nav-item" style="padding-right: 40px; padding-left: 50px; width: 120px">
			  <a class="nav-link" href="index.php"><img id="headerlogo" src="logo4.png" alt="Logo of Flor De Amor"><p id="headerlogotext"><p></a> 
			</li>
			<div class="vl"></div>
			<li class="nav-item">
			  <a class="nav-link" href="services.php">SERVICES</a>
			</li>
			<li class="nav-item" style="padding-right: 20px;">
			  <a class="nav-link" href="contactus.php">CONTACT US</a>
			</li>
		  </ul>
		</nav>
	</div>
	<BR>
	<BR>

	<hr size="2" width="70%" color="PINK"> 
		
	<div id="opening"><center>
		<p style="font-family: 'Vogue', Times, serif;font-size:60px;padding: 1px">CONTACT US</p>
	</center></div>

	<hr size="2" width="70%" color="PINK"> 
	
	<div class="bag">
		<div id="reviews">
			<p style="font-family: 'Vogue'; font-size: 30px; background-color: #fa9898; padding: 20px; border-radius: 15px">WHAT OUR PAST CLIENTS HAVE SAID ABOUT US</p>
			<img id="quotes" src="quotationmarks.png">
			<p id="clientreview">"The Philippines is a beautiful collection of islands with a hot tropical climate. Flor De Amor realized that it would be a waste to not take advantage of the sunny weather. Our wedding was a beach-themed event and we said our vows overlooking the crystal blue waters of Palawan. Flor De Amor Wedding Services perfectly timed our first kiss as a married couple so that we would look elegant as silhouettes with a golden sunset in the distance. We, and all the guests, loved it.”</p>
			<p id="clientname">- Sirena Gomez, Bulacan</p>
			<hr size="2" width="40%" color="PINK"> 
			<div id="deco" style="padding: 10px;"></div>
			<hr size="2" width="40%" color="pink"> 
			<p id="clientreview">"If anyone ever tells you that fairytale weddings can only happen in , well, fairytales… Point them to the way of Flor De Amor. They made me realize that no dream is impossible. There is no ornament too ornate, no flower too extravagant, no love too beautiful. From the wedding itself, to the reception that came after, to the lifetime of smiling at the thought of reminiscing about our wedding day - Flor De Amor had it all covered."</p>
			<p id="clientname">- Bellamy Clarke, Manila</p>

		</div>
		<div id="form">
		  <form action="" method="POST">

			<label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder="Your first name...">

			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name...">

			<label for="phoneno">Mobile Number</label>
			<input type="text" id="phoneno" name="phoneumber" placeholder="Let us give you a ring...">
			  
			<label for="emailadd">Email</label>
			<input type="text" id="emailadd" name="email" placeholder="Your Email...">  


			<label for="package">Package Type</label>
			<select id="package" name="country">
			  <option value="rose">The Rose</option>
			  <option value="lily">The Tulip</option>
			  <option value="tulip">The Lily</option>
			</select>

			<label for="subject">Message</label>
			<textarea id="subject" name="subject" placeholder="Give us an idea of what you're looking for..." style="height:100px"></textarea>

			<input type="submit" value="Submit" name="submitForm">
		  </form>
		</div>  
    <script type="text/javascript">
        if(window.history.replaceState){
          window.history.replaceState(null, null, window.location.href);
        }
    </script>

	</div>

	<div id="footerbyzia">
		 
		<hr size="2" width="40%" color="pink"> 
		<em>BIGGER, BETTER, BLOOM.</em>
		<hr size="2" width="40%" color="pink"> 
	   
	</div>    

	<br>
	<BR>
	<BR>
	<!-- Site footer -->
    <footer class="site-footer" id="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Newsletter</h6>
            <p class="in-text">Subscribe to our newsletter and we'll keep you in the loop about our latest updates.</p>
			<br>
			<form action="contactus.php#site-footer" method="POST">
			
      <?php
          $userEmail = '' ;
          if(isset($_POST['subscribe'])){
            $userEmail = $_POST['email'];
            if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
              $subject = 'FLOR DE AMOR';
              $message = 'Thanks for susbcribing to Flor De Amor. You will always receive latest updates from us.';
              $sender = 'From: info@flordeamorweddings.com';
              if(mail($userEmail, $subject, $message, $sender)){
                echo '<html><body><div class="alertSuccess">Thanks for subscribing us!</div></body></html>';

                $userEmail = '' ;
              } else{
                echo '<html><body><div class="alertError">Failed to send your email</div></body></html>';
                
              }
            }else{
              echo '<html><body><div class="alertError">Invalid Email</div></body></html>';

            }
          }
        ?>

        <div class="subscribe-form">
            <input type="text" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
          <div class="subscribe-button">
            <input type="submit" name="subscribe"value="Subscribe"> </div>
                                </form>
        
			</div>
		  </div>

          <div class="col-xs-6 col-md-3">
            <h6>Connect</h6>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="contactus.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Explore</h6>
            <ul class="footer-links">
              <li>
			  <div class="footer-icon1"><a href="contactus.php"> &nbsp; Contact Us</a> 
			  </div>
			  </li>
              <li> 
			  <div class="footer-icon2"> <a href="mailto:info@flordeamorweddings.com"> &nbsp; info@flordeamorweddings.com</a>
			  </div>
			  </li>
              <li>
			  <div class="footer-icon3"><a href="tel:+63 915 946 032"> &nbsp; +63 915 946 032</a>
			  </div>
			  </li>
              <li> 
			  <div class="footer-icon4"><a href="tel:+63 7748 4591"> &nbsp; +63 7748 4591</a>
			  </div>
			  </li>
              <li> <div class="footer-icon5"><a href="#"> &nbsp; 9AM - 6PM</a>
			  </div>
			  </li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="in-text">Copyright Design Group 4 (2IS-B) © 2021. All rights reserved.</p>
          </div>

    	<div class="footer-social-icons">
			<ul class="social-icons">
				<li><a href="https://www.facebook.com" Target="_blank" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com" Target="_blank" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com" Target="_blank" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
			
            </ul>
          </div>
        </div>
      </div>
</footer>

</body>
</html>
