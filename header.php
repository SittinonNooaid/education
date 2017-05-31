<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="css/control.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<script src="js/Slides.js"></script>
<meta charset="UTF-8">
</head>
<body>

<div class="header">
	<div class="warpper">
		<div class="header-logo"></div>
		<div class="heder-detail">
			<div class="header-menu">
				<ul class="menu">
					<li><a href="index.php" class="list-menu "
							<?php 
							if($title == 'HOME'){
								echo 'id="active"';
							}
							?>
							>HOME</a></li>
					<li><a href="project.php" class="list-menu"
					 		<?php 
							if($title == 'PROJECT'){
								echo 'id="active"';
							}
							?>
							>PROJECT</a></li>
					<li><a href="media.php" class="list-menu"
							<?php 
							if($title == 'INSTRUCTION MEDIA'){
								echo 'id="active"';
							}
							?>
							>INSTRUCTION MEDIA</a></li>
					
				</ul>
			</div>
			<div class="header-middleline"></div>
			<div class="header-login">
			<button class="but-outline fram-btu"><p class="m bcy">LOGIN</p></button>
			</div>
		</div>
	</div>	
</div>