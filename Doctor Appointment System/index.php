<?php include('header.php'); ?>

<style>
	/* Custom Styles */
	body {
		background-color: #f4f4f4;
		color: #333;
		font-family: Arial, sans-serif;
	}

	.content {
		background-color: #fff;
		padding: 20px;
		margin-bottom: 20px;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	.sliderImg {
		text-align: center;
		margin-bottom: 20px;
	}

	.sliderImg img {
		width: 300px;
		margin: 10px;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	.main_content {
		background-color: #fff;
		padding: 20px;
		margin-bottom: 20px;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	.doctor-box {
		background-color: #f9f9f9;
		padding: 20px;
		margin-bottom: 20px;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	.find-doctor {
		background-color: #e6f4f9;
		padding: 20px;
		margin-bottom: 20px;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		color: #0066cc;
		font-weight: bold;
	}
</style>

<!-- this is for welcome -->
<div class="content">
	<article>
		<h3 style="font-weight: bold; color: #FF0000;">Welcome to our Online Appointment Booking Website!</h3>
		We understand the importance of convenient and efficient healthcare services, and that's why we have created a platform that allows you to easily book appointments with trusted doctors online.
		Our mission is to connect patients with healthcare professionals in a seamless and user-friendly manner. Whether you need to schedule a routine check-up, seek specialized care, or manage ongoing treatments, our platform offers a comprehensive range of medical services to meet your needs.
		With our user-friendly interface, you can browse through a diverse network of healthcare providers, view their profiles, check their availability, and book appointments at your convenience. Say goodbye to long waiting times and endless phone calls – our online appointment booking system puts you in control of your healthcare journey.
		Thank you for choosing our Online Appointment Booking Website. We are committed to enhancing your healthcare experience and look forward to serving you.
	</article>
</div>
<br>
<br>
<p>
	<!-- nivo slider starts -->
<div class="sliderImg">
	<img src="img/pexels-evg-kowalievska-1170979.jpg" alt="">
	<img src="img/pexels-jonathan-borba-13697925.jpg" alt="">
	<img src="img/pexels-antoni-shkraba-4348404.jpg" alt="">
	<img src="img/pexels-rdne-stock-project-6129507.jpg" alt="">
</div>
<!-- nivo slider ends -->

<!-- main Content -->
<div class="main_content">
	<div class="col-md-8">
		<article>
			<div class="doctor-box">
				<p style="font-size: 50px;">BOOK YOUR APPOINTMENT NOW!!!</p>
			</div>
		</article>

	</div>

	<div class="col-md-4">
		<div class="find-doctor">
			<h3>Finds Doctors from anywhere, anytime!</h3>
			<p>Are you looking for a trusted doctor? Our platform allows you to easily search and find doctors from anywhere, at any time. Whether you need a general physician, a specialist, or a healthcare provider for a specific condition, we've got you covered. Simply enter your location and the specialty you're interested in, and browse through a wide range of doctors available in your area. Book an appointment with just a few clicks and experience convenient healthcare services at your fingertips.</p>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>

</div><!-- containerFluid Ends -->

<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>