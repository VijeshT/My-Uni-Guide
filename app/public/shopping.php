<?php include "config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
	<?php include 'includes/scripts.php';?>
</head>	
<body>

	<?php $page = 'shopping'; include 'includes/navbar.php';?>

	<!-- Background video for page -->
	<section class="backgroundVideo">
		<div class="video-overlay"></div>
			<div class="video-wrap">
				<video autoplay="autoplay" muted="muted" loop="loop"  class="bg-video">
					<!-- Video by Mixkit -Free Video Assets from Pexels -->
					<source src="images/onlineShopping.mp4" type="video/mp4">
				</video>
			</div>
			<!-- Caption and button to sit ontop of video -->
			<div class="videoCaption text-center">
				<div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
					<h1>Need a bit of retail therapy?</h1>
					<a class="vidButton btn btn-outline-light btn-lg" href="#shoppartners"><?php echo $lang['exploreNow']?></a>
				</div>
			</div>
	</section>


		<!-- Partner Cards -->
		<div id="shoppartners" class="container-fluid padding">
			<div class= "row padding">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/unidays.png">
						<div class="card-body">
							<h4 class="card-title"> UNiDAYS </h4>
							<p class= "card-text" ><?php echo $lang['unidaysCaption']?></p>
							<a href="https://www.myunidays.com/GB/en-GB" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div> 

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/studentbeans.jpg">
						<div class="card-body">
							<h4 class="card-title">StudentBeans</h4>
							<p class= "card-text" ><?php echo $lang['studentbeansCaption']?></p>
							<a href=" https://www.studentbeans.com/uk" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div>

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/totum.jpg">
						<div class="card-body">
							<h4 class="card-title"> Totum </h4>
							<p class= "card-text" ><?php echo $lang['totumCaption']?></p>
							<a href="https://www.totum.com/" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div> 

		<?php include 'includes/footer.php';?>


	</body>
	</html>