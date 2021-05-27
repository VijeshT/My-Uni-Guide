<?php include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
	<?php include 'includes/scripts.php';?>
</head>	
<body>

	<?php $page = 'about'; include 'includes/navbar.php';?>

 
    	
    <div class="gradient">
      <div class="full-bg-img"> 
       <img class="me" src = "images/V.png" > 
        <h1> <?php echo $lang['aboutQuestion']?> </h1>
        <p class="text-center"> <?php echo $lang['aboutCaption']?> </p> 
	   </div> 
</body>
</html>