<?php

	$title = 'PROJECT';
	include_once('header.php');

	if(!isset($_GET['$itempj'])){
		$itempj = '';
	}else if (!isset($_GET['$itempj'])) {
		$itempj = $_GET['$itempj'];
	}

	if(!isset($_GET['project_name'])){
		$project_name = '';
	}else{
		$project_name = $_GET['project_name'];
	}

?>
</div>
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
		<div class="project">

			<h1 class="text-headertitle">PROJECT</h1>
			<p class="m fram-matop text-c">Lorem Ipsum is simply dummy text of the 
			printing and typesetting industry.</p>

			<div class="search_input box-wights">
				<form action="project.php" method="get" >
					<input class="input-search" type="text" name="project_name"  placeholder="กรุณากรอกโครงการที่ต้องการ">
					<button class="butsmall fram-btu "></button>
				</form>
			</div>

			<div class="search_input box-wightss">

				<ul class="menu">
					<li><a href="media.php?itempj=all" class="list-menu " 		
							<?php 
							if($itempj == 'all' || $itempj == ''){
								echo 'id="active"';
							}
							?>
							>ALL</a></li>

					<li><a href="media.php?itempj=open" class="list-menu"		
							<?php 
							if($itempj == 'open'){
								echo 'id="active"';
							}
							?>
							>OPEN VOLUNTEERINGA</a></li>

					<li><a href="media.php?itempj=com" class="list-menu"
							<?php 
							if($itempj == 'com'){
								echo 'id="active"';
							}
							?>
							>COMPLETER</a></li>
					
				</ul>
			</div>

		</div>	
	</div>

	<div class="warpper2">
		<?php

		include_once "connect.php";

				$sql = "SELECT `project_id`, `project_name`, `project_title`, `project_dates`, `project_datee`, `project_img` 
				FROM `project_info` 
				WHERE project_name LIKE '%$project_name%'";
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


<?php

	include_once('footer.php'); 

?>