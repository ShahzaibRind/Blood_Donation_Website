<?php 
	include_once 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blood Donation</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h2><a href="#">Blood Donation</a></h2>
		<nav>
			<li><a href="index.php">Home</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#contact">Contact</a></li>
		</nav>
	</header>
	<section class="banner-area">
		<div class="banner-img"></div>
		<div class="searchbox">
      <h3>Search for Blood</h3>      
      <form action="searchresult.php" method="POST">
        <input 
        	style="
       		width: 300px;
       		height: 40px;
			background: none;
			border: 1px solid red;
			border-radius: 3px;
			padding: 6px 15px;
			box-sizing: border-box;
			margin-bottom: 20px;
			font-size: 14px;
			color: #fff;"

        type="text" name="search" placeholder="Search blood here...">
        <br>
        <button 

         style="width: 300px;
         height: 40px;
      background: red;
      border: 1px solid red;
      border-radius: 3px;
      padding: 6px 15px;
      box-sizing: border-box;
      margin-bottom: 20px;
      font-size: 14px;
      color: black;
      cursor: pointer;
      border-radius: 20px;
      "

        type="submit" name="submit">Search Blood</button>
      </form>
    </div>

	</section>

	<section class="about-area" id="about">
		<h3 class="section-title">About us</h3>
		<ul class="about-content">
			<li class="about-left"></li>
			<li class="about-right">
				<h2>About our Company</h2>
				<p>
					Connect and join a diverse group of people - across the Sindh. and around the Pakistan!

					Here at the MBBS Campus Dadu Blood Donation website, we see social media as a way for us to help people carry out the Blood Donation mission every day. You can connect with us and other Blood Donation supporters on the social networking sites you like to spend time on.
				</p>
				<a href="https://en.wikipedia.org/wiki/Blood_donation" target="_blank" class="about-btn">Learn More</a>
			</li>
		</ul>
	</section>

	<section class="services-area" id="services">
		<h3 class="section-title">Services</h3>
			<ul class="services-content">
				<li>
					<i class="fa fa-laptop"></i>
					<h4>Our Purpose</h4>
					<p>
						Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components.
					</p>
				</li>
				<li>
					<i class="fa fa-tint"></i>
					<h4>Donate Blood</h4>
					<p>
						A blood donation occurs when a person voluntarily has blood drawn and used for  transfusions and/or made into biopharmaceutical medications by a process called fractionation.
					</p>
				</li>
				<li>
					
					<a href="https://www.gettyimages.com/photos/blood-donation?mediatype=photography&phrase=blood%20donation&sort=mostpopular" target="_blank"><i class="fa fa-picture-o"></i>
					<h4>Gallery</h4>
					<p>
						Find blood donation stock images in HD and millions of other royalty-free stock photos, illustrations and vectors in the Shutterstock collection.
					</p>
					</a>
				</li>
			</ul>
	</section>

<section class="contact-area" id="contact">
	<h3 class="section-title">Contact</h3>
	<ul class="contact-content">
		<li>
			<i class="fa fa-map-marker"></i>
			<p>Main Road Dadu<br>Sindh, Pakistan</p>
		</li>
		<li>
			<i class="fa fa-phone"></i>
			<p>03113074660<br> 03091886810</p>
		</li>
		<li>
			<i class="fa fa-map-marker"></i>
			<p>mbbscd@gmail.com<br> shazzybaloch@gmail.com</p>
		</li>
	</ul>
</section>

<footer>
	<p>All Right Reserved @2020 Donate blood Save lives</p>
</footer>
</body>
</html>