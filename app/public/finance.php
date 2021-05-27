<?php include "config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
	<?php include 'includes/scripts.php';?>
</head>	
<body>

	<?php $page = 'finance'; include 'includes/navbar.php';?>

	<!-- Background video for page -->
	<section class="backgroundVideo">
		<div class="video-overlay"></div>
		<div class="video-wrap">
			<video autoplay="autoplay" muted="muted" loop="loop"  class="bg-video">
				<!-- Video by Ricardo Esquivel from Pexels -->
				<source src="images/money.mp4" type="video/mp4">
				</video>
			</div>
			<!-- Caption and button to sit ontop of video -->
			<div class="videoCaption text-center">
				<div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
					<h1><?php echo $lang['financeh1']?></h1>
					<a class="vidButton btn btn-outline-light btn-lg" href="#financepartners"><?php echo $lang['exploreNow']?></a>
				</div>
			</div>
		</section>


		<!-- Partner Cards -->
		<div id="financepartners" class="container-fluid padding">
			<div class= "row padding">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/which.png">
						<div class="card-body">
							<h4 class="card-title"> Which? </h4>
							<p class= "card-text" ><?php echo $lang['whichCaption']?></p>
							<a href="https://www.which.co.uk/money/university-and-student-finance/student-money-and-budgeting" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div> 

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/tmas.jpg">
						<div class="card-body">
							<h4 class="card-title"> the Money Advice Service </h4>
							<p class= "card-text" ><?php echo $lang['tmasCaption']?></p>
							<a href="https://www.moneyadviceservice.org.uk/en/articles/budgeting-for-college-or-university" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div>

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/mse.jpg">
						<div class="card-body">
							<h4 class="card-title"> MoneySavingExpert </h4>
							<p class= "card-text" ><?php echo $lang['mseCaption']?></p>
							<a href="https://www.moneysavingexpert.com/students/student-budgeting-planner/" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div> 

	




		<?php include 'includes/footer.php';?>


	</body>
	</html>