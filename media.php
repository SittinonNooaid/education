<?php

	$title = 'INSTRUCTION MEDIA';
	include_once('header.php'); 

	if(!isset($_GET['itemmd'])){
		$itemmd = '';
	}else{
		$itemmd = $_GET['itemmd'];
	}

	if(!isset($_GET['item_name'])){
		$item_name = '';
	}else{
		$item_name = $_GET['item_name'];
	}
?>

<div class="contariner">
	<div class="warpper">
		<div class="project">

			<h1 class="text-headertitle">WHAT TO SEARECH?</h1>
			<p class="m fram-matop text-c">Lorem Ipsum is simply dummy text of the 
			printing and typesetting industry.</p>

			<div class="search_input box-wights">
				<form action="media.php" method="GET" >
					<input class="input-search" type="text" name="item_name"  placeholder="กรุณากรอกอุปกรณ์ที่ต้องการ">
					<button class="butsmall fram-btu ">
						<i class="fa fa-search"></i>
					</button>
				</form>
			</div>

			<div class="search_input box-wightm">
				<ul class="menu">
					<li><a href="media.php?item_name=' ' " class="list-menu " 		
							<?php 
							if($item_name == ' ' || $itemmd == ''){
								echo 'id="active"';
							}
							?>
							>ALL</a></li>
					<li><a href="media.php?itemmd=01" class="list-menu " 		
							<?php 
							if($itemmd == '01'){
								echo 'id="active"';
							}
							?>
							>THAI LANGUAGE</a></li>

					<li><a href="media.php?itemmd=02" class="list-menu"		
							<?php 
							if($itemmd == '02'){
								echo 'id="active"';
							}
							?>
							>MATHEMATICS</a></li>

					<li><a href="media.php?itemmd=03" class="list-menu"
							<?php 
							if($itemmd == '03'){
								echo 'id="active"';
							}
							?>
							>SCIENCE</a></li>
					<li><a href="media.php?itemmd=04" class="list-menu"
							<?php 
							if($itemmd == '04'){
								echo 'id="active"';
							}
							?>
							>ARTS</a></li>
					<li><a href="media.php?itemmd=05" class="list-menu"
							<?php 
							if($itemmd == '05'){
								echo 'id="active"';
							}
							?>
							>TECHNOLOG</a></li>
					<li><a href="media.php?itemmd=06" class="list-menu"
							<?php 
							if($itemmd == '06'){
								echo 'id="active"';
							}
							?>
							>ETC.</a></li>
				</ul>
			</div>

			<div class="select_input">
				<div class="boxl_select_input">
					<div class="subtitle_select_input">
						<p class="ts text-c">เรียงโดย:</p>
					</div>
					<div class="box_select_input">
						<select class="but-select">
		  					<option value="volvo">หนังสื่อ</option>
		  					<option value="saab">อปกรณ์การเรียน</option>
		  					<option value="mercedes">สื่อการเรียน</option>
						</select>

						<select class="but-select">
		  					<option value="volvo">ป.ตอนต้น</option>
		  					<option value="saab">ป.ตอนปลาย</option>
		  					<option value="mercedes">ม.ตอนต้น</option>
		  					<option value="audi">ม.ตอนปลาย</option>
						</select>
					</div>
				</div>
			</div>

		</div>	
	</div>


<div class="contariners ">
	<div class="warpper">

		<?php

		include_once "connect.php";

		if(isset($_GET['itemmd'])){

			$itemmd = $_GET['itemmd'];

			$sql = "SELECT item_name,item_detail,item_group,item_ing,Count(item_name)AS item_number 
			FROM learning_info 
			WHERE item_group = '$itemmd' 
			GROUP by item_name 
			ORDER by item_gourse";

		}else if(isset($_GET['item_name'])){

			$item_name = $_GET['item_name'];
			$sql = "SELECT item_name,item_detail,item_ing,Count(item_name)AS item_number 
				FROM learning_info
				WHERE item_name LIKE '%$item_name%'
				GROUP by item_name
				ORDER by item_gourse";
			

		}else if(!isset($_GET['itemmd'])) {
				$itemmd = '';
				$sql = "SELECT item_name,item_detail,item_ing,Count(item_name)AS item_number 
				FROM learning_info
				GROUP by item_name
				ORDER by item_gourse";
		}
		//echo $sql;
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {

// ------------------------------------item s------------------------------------
		?>


			<div class="media-list">
			<div class="media-list-img">
				<img src="<?php echo 'img/math/'.$row["item_ing"];?>" alt="" style="width: 220px;">
			</div>
			<div class="media-list-info">
				<h2 class="text-headerpj"><?php echo $row["item_name"]; ?></h2>
				<div class="media-flow">
					<p class="m shortb-matop shortp"><?php echo $row["item_detail"]; ?></p>
				</div>
				<div class="word-ansmall">
					<span class="word-text">
						<p class="sb ">AMOUNT:</p>
					</span>
					<span class="ans-text fram-malr">
						<h3><?php echo $row["item_number"]; ?></h3>
					</span>
					<span class="ans-text fram-maleft">
						<p class="sb "> AE.</p>
					</span>
				</div>
				<button class="but fram-btu mabutton fram-maleft" id="myBtn"><p class="m bcf">SEE MORE</p></button>
			</div>
		</div>



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

</div>



<!-- ---------------------------------The Modal button--------------------------------- -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
	  	<div class="modal-content-img">
	  	</div>

	  	<div class="modal-content-detail">
			<div class="modal-content-detail-close">
	  			<div class="close"><i class="fa fa-times"></i>
			</div>
			</div>
			<div class="modal-content-detail-info">
				<h2 class="text-headerpj box-paddingtb mabutton">PROJECT</h2>
				
				<div class="word-ans">
					<span class="word-text">
						<p class="sb ">COURES:</p>
					</span>
					<span class="ans-text">
						<p class="m ">กลุ่มสาระการเรียนรู้คณิตศาสตร์</p>
					</span>
				</div>

				<div class="word-ans">
					<span class="word-text">
						<p class="sb ">EDUCATION:</p>
					</span>
					<span class="ans-text">
						<p class="m ">ระดับชั้นประถมศึกษาตอนต้น</p>
					</span>
				</div>

				<div class="word-ans">
					<span class="word-text">
						<p class="sb ">GOURSE:</p>
					</span>
					<span class="ans-text">
						<p class="m ">ระดับชั้น ป.1</p>
					</span>
				</div>

				<div class="word-ans minh">
					<span class="word-text">
						<p class="sb ">DETAIL:</p>
					</span>
					<span class="ans-text maxw">
						<p class="m">หนังสือเรียนทัก</p>						
					</span>
				</div>
				<div class="cb"></div>

				<div class="word-inputnumber">
					<span class="word-inputnumber">
						<p class="sb ">AMOUNT:</p>
					</span>
					<span class="word-inputnumber">
						
						<form id='myform' method='POST' action='media.php'>
						    <div class="box-kum">
							    <input type='button' value='-' 
							    class='qtyminus butssmall m bcf box-margintb ' 
							    field='quantity' />
							    <input type='text' name='quantity' value='1' class="but-outline-small fram-malr" />
							    <input type='button' value='+' 
							    class='qtyplus butssmall m bcf box-margintb ' 
							    field='quantity' />
						    </div>
						    <input type="submit" class="but fram-btu mabutton m bcf fram-matop" value="SEE MORE">
						</form>
					</span>
				</div>

			
			</div>
		</div>

		<div class="cb"></div>

  	</div>
 </div>
<!-- ---------------------------------The Modal button--------------------------------- --> 


<script src="js/Modalbox.js"></script>

<?php

	include_once('footer.php'); 

?>