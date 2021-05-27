<?php include "config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
	<?php include 'includes/scripts.php';?>
</head>	
<body>

	<?php $page = 'food'; include 'includes/navbar.php';?>

	<!-- Background video for page -->
	<section class="backgroundVideo">
		<div class="video-overlay"></div>
			<div class="video-wrap">
				<video autoplay="autoplay" muted="muted" loop="loop"  class="bg-video">
					<!-- Video by Pressmaster from Pexels -->
					<source src="images/food.mp4" type="video/mp4">
				</video>
			</div>
			<!-- Caption and button to sit ontop of video -->
			<div class="videoCaption text-center">
				<div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
					<h1><?php echo $lang['foodh1']?></h1>
					<a class="vidButton btn btn-outline-light btn-lg" href="#foodpartners"><?php echo $lang['exploreNow']?></a>
				</div>
			</div>
	</section>


		<!-- Partner Cards -->
		<div id="foodpartners" class="container-fluid padding">
			<div class= "row padding">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/SBOF.png">
						<div class="card-body">
							<h4 class="card-title"> The Student Book of Food </h4>
							<p class= "card-text" ><?php echo $lang['studentBookCaption']?></p>
							<a href="https://www.thestudentbookoffood.com/" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div> 

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/TSFP.png">
						<div class="card-body">
							<h4 class="card-title"> The Student Food Project </h4>
							<p class= "card-text" ><?php echo $lang['studentFoodCaption']?></p>
							<a href="https://www.thestudentfoodproject.com/" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div>

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="images/Partners/bbcgoodfood.png">
						<div class="card-body">
							<h4 class="card-title"> BBC Good Food </h4>
							<p class= "card-text" ><?php echo $lang['bbcGoodCaption']?></p>
							<a href="https://www.bbcgoodfood.com/recipes/collection/student" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div> 

		<?php include 'includes/footer.php';?>


	</body>
	</html>