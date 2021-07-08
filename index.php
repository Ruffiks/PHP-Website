<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>PHP Website</title>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<section class="main">
		<nav>
			<a href="#" class="logo">
				<img src="images/logo1.png">
			</a>

			<ul class="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Feature</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
		<div class="main-heading">
			<h1>Create Prespectives With Virtual Reality</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere minima beatae sapiente ea? Consequuntur.</p>
			<a class="main-btn" href="#">Contact</a>
		</div>
	</section>

	<section class="features">
		<div class="feature-container">

			<div class="feature-box">
				<div class="f-img">
					<img src="images/info-icon1.png">
				</div>
				<div class="f-text">
					<h4>Web Development</h4>
					<p>Lorem ipsum dolor sit amet.</p>
					<a href="#" class="main-btn">Check</a>
				</div>
			</div>

			<div class="feature-box">
				<div class="f-img">
					<img src="images/info-icon2.png">
				</div>
				<div class="f-text">
					<h4>Software Development</h4>
					<p>Lorem ipsum dolor sit amet.</p>
					<a href="#" class="main-btn">Check</a>
				</div>
			</div>

			<div class="feature-box">
				<div class="f-img">
					<img src="images/info-icon3.png">
				</div>
				<div class="f-text">
					<h4>App Development</h4>
					<p>Lorem ipsum dolor sit amet.</p>
					<a href="#" class="main-btn">Check</a>
				</div>
			</div>

		</div>
	</section>

	<section class="about">
		<div class="about-img">
			<img src="images/about.png">
		</div>
		<div class="about-text">
			<h2>Start Tracking Your Statistics</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam doloribus pariatur, maxime minus sint molestiae dolore est aut, officia dignissimos dolorem, aliquid blanditiis labore nulla.</p>
			<button class="main-btn" href="#">Read More</button>
		</div>
	</section>

	<section class="contact">
		<div class="contact-heading">
			<h1>Contact Us</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
		<form action="userinformation.php" method="post">
			<input type="text" name="user" placeholder="Your Full Name">
			<input type="email" name="email" placeholder="Your E-Mail">
			<textarea name="message" placeholder="Type Your Message"></textarea>
			<button class="main-btn contact-btn" type="submit">Send</button>
		</form>
	</section>
</body>
</html>