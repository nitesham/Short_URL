<?php

$short_url = $_GET['short_url'];
//echo $short_url;

$connect = mysqli_connect("localhost","root","","excel");
$query = "SELECT * FROM shortlink WHERE short_url='$short_url'";
$result = mysqli_query($connect,$query);
$numrows = mysqli_num_rows($result);
	 if( $numrows == 1 )
	{
		$row = mysqli_fetch_assoc($result);
		$url = $row['url'];
	//echo "$url";
    //header("Location:$url");
      echo"<script type='text/javascript'>window.location = '$url' </script>";	
	}
	else
		echo "NO Short url Found";

?>
 