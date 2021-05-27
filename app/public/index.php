
<?php include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
	<?php include 'includes/scripts.php';?>
</head>	
<body>

	<?php $page = 'home'; include 'includes/navbar.php';?>
	
	<!-- Carousel to show a slideshow of images -->
	<div id="slideShow" class="carousel slide" data-ride="carousel" data-interval="3000">
		<!-- Individual data target for the carousel indicators -->
		<ol class="carousel-indicators">
			<li data-target="#slideShow" data-slide-to="0" class="active"></li>
			<li data-target="#slideShow" data-slide-to="1"></li>
			<li data-target="#slideShow" data-slide-to="2"></li>
		</ol>
		<!-- New div class to add images to the slides -->
		<div class="carousel-inner" role="listbox">
			<!-- First slide show image -->
			<div class="carousel-item active">
				<img src="images/HomePage/background.jpg">
				<!-- Photo by Baim Hanif on Unsplash	-->
				<div class="carousel-caption">
					<h1 class="display-2"><?php echo $lang['carousel-caption'] ?></h1>
				</div>	
			</div>
			<div class="carousel-item">
				<img src="images/HomePage/background4.jpg">
				<!-- Photo by Brooke Cagle on Unsplash -->
			</div>
			<div class="carousel-item">
				<img src="images/HomePage/background2.jpg">
				<!-- Photo by Joanna Kosinska on Unsplash -->
			</div>	
		</div>	
	</div> 
	<!-- End of slideshow of images -->

	<!-- Jumbatron -->	
	<div class="container-fluid">
		<div class=" row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<h1><?php echo $lang['question']?></h1>
				<p class="lead"><?php echo $lang['questionAnswer']?></p>
			</div>
		</div>	
	</div>
	<!-- End of jumbatron -->



	<!-- Welcome Section  
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Uhh not sure yet.</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">uwhduiahwduhauwidhuaiwhduiawhdiaw</p>
			</div>	
		</div>
	</div> -->

	<!-- Three Column Section 
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-code"></i>
				<h3>HTML</h3> 
				<p>KAHWDKAJWHDAWJDHA</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-code"></i>
				<h3>HTML</h3> 
				<p>KAHWDKAJWHDAWJDHA</p>
			</div>
			<div class="col-sm-12 col-md-4">
				<i class="fab fa-css3"></i>
				<h3>CSS3</h3> 
				<p>KAHWDKAJWHDAWJDHA</p>
			</div>	
		</div>
		<hr class="my-4">
	</div>	-->

	<!-- Two Column Section 
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2> If you build it... </h2>
				<p> hhhhhhhhhhhhhhhhhhhh </p>
				<br>
				<a href="#" class="btn btn-primary">Learn More</a>
			</div>
			<div class="col-lg-6">
				<img src="images/desk.png" class="img-fluid">
			</div>	
		</div>
	</div>	-->

	<!-- <hr class="my-4"> -->
	<!-- Fixed background -->
	<!-- <figure>
		<div class="fixed-wrap">
			<div id="fixed">
			</div>	
		</div>	
	</figure> -->

	<!-- Our Popular Partners -->
	<div class="container-fluid padding">
		<div class="row popular_partners text-center">
			<div class="col-12">
				<h1 class="display-4"><?php echo $lang['popularPartners']?></h1>
			</div>
			<hr>	
		</div>
	</div>	

	<hr class="my-4">

	<!-- Partner Cards -->
	<div class="container-fluid padding">
		<div class= "row padding">
			<div class="col-md-4">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/Partners/which.png" alt="Avatar" style="width:300px;height:300px;">
						</div>
						<div class="flip-card-back">
							<h4 class="card-title"> Which? </h4>
							<p class= "card-text" ><?php echo $lang['whichCaption']?></p>
							<a href="https://www.which.co.uk/money/university-and-student-finance/student-money-and-budgeting" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>
					</div>
				</div>	
			</div>

			<div class="col-md-4">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/Partners/SBOF.png" alt="Avatar" style="width:300px;height:300px;">
						</div>
						<div class="flip-card-back">
							<h4 class="card-title"> The Student Book of Food </h4>
							<p class= "card-text" > <?php echo $lang['studentBookCaption']?> </p>
							<a href="https://www.thestudentbookoffood.com/" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>
					</div>
				</div>	
			</div>

			<div class="col-md-4">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/Partners/unidays.png" alt="Avatar" style="width:300px;height:300px;">
						</div>
						<div class="flip-card-back">
							<h4 class="card-title"> UNiDAYS </h4>
							<p class= "card-text" ><?php echo $lang['unidaysCaption']?></p>
							<a href="https://www.myunidays.com/GB/en-GB" target="_blank" class="btn btn-outline-secondary"><?php echo $lang['launchWebsite']?></a>
						</div>
					</div>
				</div>	
			</div>
		


		</div>
	</div> 
	<!-- End of partner cards -->

	



	<hr class="my-4">

	

	<!-- Learn, Develop, Grow -->
	<div class="row text-center padding">
		<div class="ldg col-xs-12 col-sm-6 col-md-4">
			<img class="img-fluid" src="images/HomePage/learn2.png" alt="Responsive image">
			<h3><?php echo $lang['learn']?></h3> 
			<p><?php echo $lang['learnCaption']?></p>
		</div> 
		<div class="ldg col-xs-12 col-sm-6 col-md-4">
			<img class="img-fluid" src="images/HomePage/develop.png" alt="Responsive image">
			<h3><?php echo $lang['develop']?></h3> 
			<p><?php echo $lang['developCaption']?></p>
		</div>
		<div class="ldg col-sm-12 col-md-4">
			<img class="img-fluid" src="images/HomePage/apply.png" alt="Responsive image">
			<h3><?php echo $lang['grow']?></h3> 
			<p><?php echo $lang['growCaption']?></p>
		</div>	
	</div>
	<hr class="my-4">
	<!-- End of LDG Section -->

	<!-- Emoji Section -->
	<button class="fun"	data-toggle="collapse" data-target="#emoji"><?php echo $lang['click4fun']?></button>
	<div id="emoji" class="collapse">
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-sm-6 col-md-3">
					<img class="gif" src="images/gif/smug.gif">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="gif" src="images/gif/buck.gif">
				</div>	
				<div class="col-sm-6 col-md-3">
					<img class="gif" src="images/gif/alien.gif">
				</div>	
				<div class="col-sm-6 col-md-3">
					<img class="gif" src="images/gif/thumb.gif">
				</div>		
			</div>
		</div>	
	</div> 
	<!-- End of Emoji Section -->	

	<?php include 'includes/footer.php';?>

	
</body>
</html>