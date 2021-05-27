

<!-- <div class="container-fluid" style="background-color:#F44336;color:#fff;height:50px;">
  <h1>Bootstrap Affix Example</h1>
  <h3>Fixed (sticky) navbar on scroll</h3>
  <p>Scroll this page to see how the navbar behaves with data-spy="affix".</p>
  <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</p>
</div> -->

<!-- NAV BAR  -->
<!-- md - transition at the 768 pixel mark (Bootstrap breakpoint) -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> 
		<div class="container-fluid">
			<!-- Logo for the website within the navbar -->
			<a class="navbar-logo" href="index.php"><img src="images/muglogo2.jpg"></a>
			<!--Drop down button, when navbar is collpased -->	
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<!-- Toggle hamburger button icon -->
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Options on the navbar -->
			<div class="collapse navbar-collapse" id="navbarResponsive" >
				<!-- Unordered list, margin left - position our navigation to the right hand side  -->
				<ul class="navbar-nav  ml-auto">
					<!-- List items -->
					<li class="nav-item">
						<!-- First php statement to activate page, by highlighting on the navbar so user is aware which page they are on -->
						<!-- Second php statement is to show the relevant text on the website depending on which language is selected-->
						<a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php"><?php echo $lang['home']?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='food'){echo 'active';}?>" href="food.php"><?php echo $lang['food']?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='finance'){echo 'active';}?>" href="finance.php"><?php echo $lang['finance']?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='bills'){echo 'active';}?>" href="bills.php"><?php echo $lang['bills']?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='shopping'){echo 'active';}?>" href="shopping.php"><?php echo $lang['shopping']?></a>
					</li>	
					<li class="nav-item">
						<a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php"><?php echo $lang['about']?></a>
					</li>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><?php echo $lang['language']?></a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.php?lang=en"><?php echo $lang['lang_en'] ?><img src="images/Languages/uk.png"></a>
							<!-- Flag Icons made by https://www.flaticon.com/authors/freepik -->
							<a class="dropdown-item" href="index.php?lang=fr"><?php echo $lang['lang_fr'] ?><img src="images/Languages/france1.png"></a>
						</div>	
					</li>		
				</ul>	
			</div>	
		</div>
	</nav>

