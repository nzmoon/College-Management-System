<?PHP
// include connection page
include("murad_db.php");
// select data from student table in database
$str = "SELECT * FROM student";
if(isset($_GET['std_id'])){
	$std_id = $_GET['std_id'];
	$str.=" WHERE std_id=$std_id";
}
$pages_query = $con->query($str)or die(mysqli_error($con));

// fetch all data in an array
$pages_fetch = $pages_query->fetch_assoc();

// assign page data to $data variable
$data = $pages_fetch['std_reference'];
$separator = "</break>";
if(!isset($_GET['std_id'])){
	
	 echo substr("$data", 0, 50) . '';
	echo "<br /><a href='student_details.php?std_id=".$pages_fetch['std_id']."'> Read More..</a>";
}else{
echo str_replace($separator,"",$data);
}
?>