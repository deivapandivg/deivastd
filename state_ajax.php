<?php include('config.php');
	$StateId=$_REQUEST['State'];
	if($StateId!=""){
		$GetDistrict=mysqli_query($con, "SELECT * From district WHERE StateId='$StateId' ");
		while($RowDistrict=mysqli_fetch_array($GetDistrict)){
			?>
			<option value="<?php echo $RowDistrict['DistrictId'];?>"> <?php echo $RowDistrict['District']; ?></option>
		
		<?php
		}
	}

?>