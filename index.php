<?php

	$title = 'HOME';
	include_once('header.php'); 

?>



<div class="container-slideshow">

		<div class="mySlides">
			<div class="warpper">
				<div class="mySlides-info fram-patop">
					<h2 class="text-headerpj bcf">PROJECT</h2>
					<p class="m fram-matop shortp bcf">Lorem Ipsum is simply dummy text of the 
							printing and typesetting industry. 
							Lorem Ipsum has been the industry's 
							standard dummy text ever since the 1500s,</p>
					<button class="but fram-btu"><p class="m bcf">SEE MORE</p></button>
				</div>
			</div>

				<img class="myimg" src="img/pjtop.jpg" style="width: 100%;">
			
		</div>

		<div class="mySlides"  style="display:none">
			<div class="warpper">
				<div class="mySlides-info fram-patop">
					<h2 class="text-headerpj bcf">PROJECT</h2>
					<p class="m fram-matop shortp bcf">Lorem Ipsum is simply dummy text of the 
							printing and typesetting industry. 
							Lorem Ipsum has been the industry's 
							standard dummy text ever since the 1500s,</p>
					<button class="but fram-btu"><p class="m bcf">SEE MORE</p></button>
				</div>
			</div>

				<img class="myimg" src="img/pjtop02.jpg" >
			
		</div>
		<div class="mySlides"  style="display:none">
			<div class="warpper">
				<div class="mySlides-info fram-patop">
					<h2 class="text-headerpj bcf">PROJECT</h2>
					<p class="m fram-matop shortp bcf">Lorem Ipsum is simply dummy text of the 
							printing and typesetting industry. 
							Lorem Ipsum has been the industry's 
							standard dummy text ever since the 1500s,</p>
					<button class="but fram-btu"><p class="m bcf">SEE MORE</p></button>
				</div>
			</div>

				<img class="myimg" src="img/pjtop03.jpg" >
			
		</div>


  	<div class="img-center">
		  <button class="img-button demo" onclick="currentDiv(1)"></button> 
  		  <button class="img-button demo" onclick="currentDiv(2)"></button> 
          <button class="img-button demo" onclick="currentDiv(3)"></button> 
  	</div>

</div>

<div class="contariner">
	<div class="warpper">
		<div class="abount">

			<h1 class="text-headertitle">ABOUNT US</h1>
			<p class="m fram-matop text-c">Lorem Ipsum is simply dummy text of the 
			printing and typesetting industry.</p>
		</div>

		<?php include_once('data/data.php'); ?>

		<div class="abount-detail">

			<div class="a-box-detail fram-maright">
				<div class="abd-icon"></div>
				<div class="abd-title">
					<h4 class="text-header4"><?php echo $titleAbount01; ?></h4>
					<p class="m shortb-matop shortp"><?php echo $subtitleAbount01; ?></p>
				</div>
				<button class="but-no"><p class="m bcy">SEE MORE</p></button>
			</div>

			<div class="a-box-detail fram-maright">
				<div class="abd-icon"></div>
				<div class="abd-title">
					<h4 class="text-header4"><?php echo $titleAbount02; ?></h4>
					<p class="m shortb-matop shortp"><?php echo $subtitleAbount02; ?></p>
				</div>
				<button class="but-no"><p class="m bcy">SEE MORE</p></button>
			</div>

			<div class="a-box-detail fram-maright">
				<div class="abd-icon"></div>
				<div class="abd-title">
					<h4 class="text-header4"><?php echo $titleAbount03; ?></h4>
					<p class="m shortb-matop shortp"><?php echo $subtitleAbount03; ?></p>
				</div>
				<button class="but-no"><p class="m bcy">SEE MORE</p></button>
			</div>

			<div class="a-box-detail">
				<div class="abd-icon"></div>
				<div class="abd-title">
					<h4 class="text-header4"><?php echo $titleAbount04; ?></h4>
					<p class="m shortb-matop shortp"><?php echo $subtitleAbount04; ?></p>
				</div>
				<button class="but-no"><p class="m bcy">SEE MORE</p></button>
			</div>

		</div>
	</div>
	<div class="cb"></div>
</div>



<div class="contariner">
	<div class="warpper2">
		<div class="abount">
			<h1 class="text-headertitle">PROJECT</h1>
			<p class="m fram-matop text-c">Lorem Ipsum is simply dummy text of the 
			printing and typesetting industry.</p>
		</div>


		<?php

		include_once "connect.php";

				$sql = "SELECT `project_id`, `project_name`, `project_title`, `project_dates`, `project_datee`, `project_img` 
				FROM `project_info` 
				WHERE 1 ";
		//echo $sql;
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {

// ------------------------------------item s------------------------------------
		?>


			<d<!----------------------------------project-detail---------------------------------->
	<div class="project-detail">
		<div class="pd-img">
			<img src="<?php echo 'img/'.$row["project_img"]; ?>" alt="" style="width: 100% ">
		</div>
		<div class="pd-info">
			<h2 class="text-headerpj"><?php echo $row["project_name"]; ?></h2>
			<p class="m shortb-matop shortp"><?php echo $row["project_title"]; ?>
			<p class="sb mabutton"> <?php echo 'DATE END EVEN :'.$row["project_datee"]; ?></p>
			<button class="but fram-btu mabutton"><p class="m bcf">SEE MORE</p></button>
		</div>
	</div>
	<!----------------------------------project-detail---------------------------------->



		<?php	
// ------------------------------------item s------------------------------------

	
				
			}
		
		}else{

			?>
				<h1 class="text-headertitle"><?php echo 'ไม่พบข้อมูล'?></h1>
				<p class="m fram-matop text-c"><?php echo 'กรุณาเลือกกรอกคำค้นหาใหม่'?></p>
			<?php

		}
		$conn->close();

		?>
	
	</div>

	<div class="cb"></div>

</div>


<?php

	include_once('footer.php'); 

?>

	