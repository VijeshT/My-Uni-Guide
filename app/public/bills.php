<?php include "config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
	<?php include 'includes/scripts.php';?>
</head>	
<body>

	<?php $page = 'bills'; include 'includes/navbar.php';?>

	<!-- Background video for page -->
	<section class="backgroundVideo">
		<div class="video-overlay"></div>
		<div class="video-wrap">
			<video autoplay="autoplay" muted="muted" loop="loop"  class="bg-video">
				<!-- Video from https://www.videvo.net/video/gas-hob-1/1799/-->
				<source src="images/bills.mov" type="video/mp4">
				</video>
			</div>
			<!-- Caption and button to sit ontop of video -->
			<div class="videoCaption text-center">
				<div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
					<h1><?php echo $lang['billh1']?></h1>
					<a class="vidButton btn btn-outline-light btn-lg" href="#financepartners"><?php echo $lang['exploreNow']?></a>
				</div>
			</div>
		</section>


		<!-- Partner Cards -->
		<div id="financepartners" class="container-fluid padding">
			<div class= "row padding">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/tsh.jpg">
						<div class="card-body">
							<h4 class="card-title">The Scholarship Hub</h4>
							<p class= "card-text" ><?php echo $lang['theScholarHub']?></p>
							<a href="https://www.thescholarshiphub.org.uk/step-step-guide-student-utility-bills/" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div> 

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/stb.png">
						<div class="card-body">
							<h4 class="card-title">Split the Bills</h4>
							<p class= "card-text" ><?php echo $lang['splitTheBillsCaption']?></p>
							<a href="https://www.splitthebills.co.uk/advice-centre/student-bills-basics/students-and-household-bills-what-you-need-to-pay-for/" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div>

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/ovo.jpg">
						<div class="card-body">
							<h4 class="card-title">OVO Energy</h4>
							<p class= "card-text" ><?php echo $lang['OVOCaption']?></p>
							<a href="https://www.ovoenergy.com/guides/energy-guides/gas-and-electricity-for-students.html" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div> 

	




		<?php include 'includes/footer.php';?>


	</body>
	</html>