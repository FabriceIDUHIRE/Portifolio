<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- Header Section--->

	<header>
		<div class="user">
			<img src="mee.jpg">
			<h3 class="name">Fabrice IDUHIRE</h3>
			<p class="post">Front-end Developer</p>
		</div>

		<nav class="navbar">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#service">Service</a></li>
				<li><a href="#education">Education</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!--- End of Header section-->


	<!-- Content Section-->

	<div class="container">
		<section class="home" id="home">
			
			<h3>hi there.....</h3>
			<h3 class="name"> my name is <span> Fabrice IDUHIRE</span> </h3>
			<h3 class="post">i am a <span class="typing-text">Front-end Dev</span> </h3>

			<a href="#"> <button class="btn">hire me</button> </a>

			<div class="share">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-whatsapp"></i></a>
				<a href="#"><i class="fab fa-linkedin"></i></a>
			</div>
		</section>

<!-- About section-->

<section class="about" id="about">

	<h1 class="heading">about me</h1>

	<div class="content">
		<h3 class="name"> my name is <span> Fabrice IDUHIRE</span> </h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac,<br> ullamcorper placerat augue. Proin fermentum lobortis nibh, vitae lacinia arcu auctor vel.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac,<br> ullamcorper placerat augue. Proin fermentum lobortis nibh, vitae lacinia arcu auctor vel.</p>
	</div>

	<div class="skills">
		<div class="progress">
			<h3>HTML <span>80%</span></h3>
			<div class="bar"><span></span></div>
		</div>
		<div class="progress">
			<h3>Css <span>70%</span></h3>
			<div class="bar"><span></span></div>
		</div>
		<div class="progress">
			<h3>JavaScript <span>60%</span></h3>
			<div class="bar"><span></span></div>
		</div>
		<div class="progress">
			<h3>PHP <span>70%</span></h3>
			<div class="bar"><span></span></div>
		</div>
		<div class="progress">
			<h3>Photoshop <span>50%</span></h3>
			<div class="bar"><span></span></div>
		</div>

	</div>

</section>

<!--Service section-->

<section class="service" id="service">
	<h1 class="heading"> my service</h1>

	<div class="box-container">
		
		<div class="box">
			<i class="fab fa-html5"></i>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
		<div class="box">
			<i class="fab fa-css3"></i>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
		<div class="box">
			<i class="fab fa-js"></i>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
		<div class="box">
			<i class="fas fa-paint-brush"></i>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
		<div class="box">
			<i class="fas fa-bullhorn"></i>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
		<div class="box">
			<i class="fab fa-wordpress"></i>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
	</div>
</section>

<!--education-->

<section class="education" id="education">
	<h1 class="heading">my education</h1>

	<div class="box-container">

		<div class="box">
			<div class="year">2018 - 2020</div>
			<h3>Frontend development</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
		<div class="box">
			<div class="year">2020 - 2021</div>
			<h3>Backend development</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
		<div class="box">
			<div class="year">2021 - 2022</div>
			<h3>Web Design</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
		<div class="box">
			<div class="year">2022 - </div>
			<h3>Photoshop</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis leo tortor, faucibus et nisi ac</p>
		</div>
	</div>
</section>

<!--Contact-->

<section class="contact" id="contact">
	
	<h1 class="heading">Contact Me</h1>

	<div class="row">
		<form action="" method="POST">
			<input type="text" name="firstname" class="box" placeholder="firstname" required>
			<input type="text" name="lastname" class="box" placeholder="lastname" required>
			<input type="email" name="email" class="box" placeholder="your email" required>
			<textarea name="message" id="" cols="30" rows="30" class="box message" placeholder="message" required></textarea>
			<!--<input type="submit" name="" value="message" class="btn">-->
			<button type="submit" name="send" value="message" class="btn">message</button>
		</form>

		<div class="content">
			<div class="icons">
				<h3><i class="fas fa-map-marker-alt"></i> address</h3>
				<p>Kigali, Rwanda kk 602st</p>
			</div>
			<div class="icons">
				<h3><i class="fas fa-envelope"></i> email</h3>
				<p>fabriceiduhire@gmail.com</p>
			</div>
			<div class="icons">
				<h3><i class="fas fa-phone"></i> phone</h3>
				<p>(+250)784661878</p>
			</div>
		</div>
	</div>
</section>

</div>
	<!-- End of Content Section-->



<!-- Theme toggler -->




	<!-- type.js cdn link-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

	<script>
		var type = new Typed('.typing-text',{
			strings : ['graphic design', 'front end dev','web design'],
			typeSpeed:120,
			loop:true
		});

	</script>

</body>
</html>

<?php
$connection=mysqli_connect("localhost","root","","portifolio");
if(isset($_POST['send']))
{
	$firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $message=$_POST['message'];
      
		    
$query="INSERT INTO messages (Firstname, Lastname, Email, Message) VALUES ('$firstname', '$lastname', '$email', '$message')";
	        $run=mysqli_query($connection,$query);
	        if($run==1)
	        {
		       
	        }

	        else
	        {
		        echo"not inserted";
	        }
}
?>
