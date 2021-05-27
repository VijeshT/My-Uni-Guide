<?php include "config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
	<?php include 'includes/scripts.php';?>
</head>	
<body>

	<?php $page = 'partners'; include 'includes/navbar.php';?>

	

	<!-- Partner Cards -->
	<div class="container-fluid padding">
		<div class= "row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="images/team1.png">
					<div class="card-body">
						<h4 class="card-title"> John Doe </h4>
						<p class= "card-text" > rawadhwaiodjaow </p>
						<a href="https://www.google.co.uk/webhp?hl=en&tab=mw" target="_blank" class="btn btn-outline-secondary"> Launch Website</a>
					</div>	
				</div>	
			</div>

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="images/team2.png">
					<div class="card-body">
						<h4 class="card-title"> Mary Joe </h4>
						<p class= "card-text" > rawadhwaiodjaow </p>
						<a href="#" class="btn btn-outline-secondary"> Launch Website</a>
					</div>	
				</div>	
			</div>

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="images/team3.png">
					<div class="card-body">
						<h4 class="card-title"> Phil Ho </h4>
						<p class= "card-text" > rawadhwaiodjaow </p>
						<a href="#" class="btn btn-outline-secondary"> Launch Website</a>
					</div>	
				</div>	
			</div>				
		</div>
	</div>
	
	<?php include 'includes/footer.php';?>


</body>
</html>