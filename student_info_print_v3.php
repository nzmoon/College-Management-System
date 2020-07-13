
<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['submit']))
	{
		$std_department = $_REQUEST['std_department'];
		$std_roll = $_REQUEST['std_roll'];
		$sql = "select * from student where std_department= '".$std_department."' && std_roll= '".$std_roll."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>



<?php include"header.php" ?>
	<div class="container">
<div class="row">




<div class="col-md-12">

			<div id="print" style="background: #ffffff" class="col-md-12">
  
	<style type="text/css">
		table{
			border-collapse: collapse;
			background: #ffffff;
			font-family: 'Open Sans', sans-serif;
		}
		table.result td, table.result th {
		  border: 1px solid #747c8a;
		  padding:4px 2px;
		  text-align: center;
		  vertical-align: middle;
		  font-weight: normal;
		  background: #ffffff;
		}
		table th{
			text-align: center;
			border: 1px solid #747c8a;
			background: #ffffff;
		}
		table.result td.tleft{
			text-align: center;
			background: #ffffff;
		}

	</style>			
			
			
			
			
<table width="100%">

	<tr class="resultspage">
		<div class="row">
		<div class="col-md-5">
		<td><img src="images/logo.jpg" width="130" height="120" alt="Logo" /> </td>
		</div>
		<div class="col-md-2">
		<td class="resulttitkel" colspan="2">
		
			<h1 class="rctitle">Bangladesh Sweden Polytechnic Institute</h1>
			<h2>Kaptai,Rangamati Hill Tracks</h2>
			<h3>STUDENT ACADEMIC INFORMATION</h3>
		</td>
		</div>
		<div class="col-md-5">
		<td align="right">
			<img src="images/govlogo.png" alt="bd logo"/>

		</td>
		</div>
	</tr>
	


<tr>
<td> Student Picture </td><td><?php echo $row['std_name']?></td>
<td align="right">

    <?php 
	if(trim($row["image"])!="")
	{
			$image_dir = 'admin/uploaded_image/';
			$img_name = trim($row["image"]);
			if(is_file($image_dir.$img_name))
			{
				$img_patd = '<img src="'.$image_dir.$img_name.'" height="100" width="150"/>';
			}
			else
			{
				$img_patd = '<img src="'.$image_dir.'admin/images/female.png" />';	
			}
			
	?>

	
	<?php echo $img_patd;?>



<?php 
	 }


	?>



</td>
   
   
   </tr>
   
   </div>
   <div class="col-md-6">
<tr><td> Name </td><td>:</td><td><?php echo $row['std_name']?></td></tr>
 <tr><td> Father's Name </td><td>:</td><td><?php echo $row['std_fname']?></td></tr>
<tr><td> Mother's Name </td><td>:</td><td><?php echo $row['std_mname']?></td></tr>

<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">

 <?php echo $row['std_department']?>
</td></tr>

<tr><td width="23%"> SHIFT </td><td width="2%">:</td><td width="75%">
<?php echo $row['std_shift']?>
</td></tr>
<tr><td width="23%"> SEMESTER </td><td width="2%">:</td><td width="75%"> <?php echo $row['std_semester']?></td></tr>


<tr><td> ROLL NO </td><td>:</td><td> <?php echo $row['std_roll']?></td></tr>
<tr><td>REGISTRATION NO </td><td>:</td><td><?php echo $row['std_reg']?></td></tr>
<tr><td> SESSION  </td><td>:</td><td><?php echo $row['std_ses']?></td></tr>
<tr><td> DATE OF BIRTH  </td><td>:</td><td><?php echo $row['std_date_of_birth']?></td></tr>
<tr><td> NATIONAL ID </td><td>:</td><td><?php echo $row['std_nid']?></td></tr>
<tr><td> Contact Number </td><td>:</td><td><?php echo $row['std_contact']?></td></tr>


<tr><td> PRESENT ADDRESS </td><td>:</td><td><?php echo $row['std_present_address']?></td></tr>
<tr><td> PERMANENT ADDRESS </td><td>:</td><td><?php echo $row['std_permanent_address']?></td></tr>
<tr><td> Reference </td><td>:</td><td><?php echo $row['std_reference']?></td></tr>
</div>

 <?php 
	 }


	?>


	
			</table>
			


		    </div>	
			
		<div class=row">
		<div style="background: #ffffff" class="col-md-12">
		<input id="Button1" type="button" value="Print" onclick="Print('print')" />
		</div>
		</div>
			<div class=row">
		<div style="background: #ffffff" class="col-md-12">
		<br>
		</div>
		</div>
		
		</div>
			</div>
</div>			
	<?php include"footer.php" ?>