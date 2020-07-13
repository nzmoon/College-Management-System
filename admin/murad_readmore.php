<?php
include("murad_db.php");
$limit_word = 200;

$query = "SELECT * FROM student ORDER BY std_name DESC";
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result))
{
      $data1 = $row['std_name'];
      $id =  $row['std_roll'];
      echo substr( $data1,0,$limit_word);

     echo '<a href="read_more.php?std_id=$std_id">Click Here to Read More</a>";
}
?>