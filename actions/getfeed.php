	<?php 
	require('../connect.php');
	require('../Mobile_Detect.php');
	$name = $_GET['name'];
	$name = strip_tags($name);
	$name = stripslashes($name);
	$name = mysqli_real_escape_string($con, $name);
	
	 $dp_style = "display: inline-block; width: 10%; vertical-align: top;";
      $detect = new Mobile_Detect;
	 if($detect->isMobile()){ 
		$dp_style = "display: inline-block; width: 20%; vertical-align: top;";
	 }
	 ?>
	
		<?php

			$query = mysqli_query($con, "SELECT * FROM feed  WHERE chawara='$name' OR chata='$name' OR chawara='$name' AND chata='$name' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){	
		?>
			<div class="customWell" style="margin: 8px;">
				<?php
					$echoo = null;
				    if($row['chawara'] == $row['chata']){
                        $echoo = $name;
                    }else if($row['chata'] == $name){
                        $echoo = $row['chawara'];
                    }else if($row['chawara'] == $name){
                        $echoo = $name;
                    }
					$queryy = mysqli_query($con, "SELECT * FROM users WHERE name='$echoo'");
					$postuser = mysqli_fetch_array($queryy);
				?>
				<img src="<?php echo $postuser['profile']; ?>" class="img-thumbnail" style="<?php echo $dp_style; ?>">
				<p style="display: inline-block; margin-top: 10px;"><b><?php echo $echoo; ?></b><br> <?php echo $row['feedd']; ?></p>
			</div>
		<?php } ?>