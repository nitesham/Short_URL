<?php

$connect = mysqli_connect("localhost","root","","excel");
?>


<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Ecxel file</title>
</head>
<body>
<div class="container" style="margin-top:50px;">
<div class="col-md-6 col-md-offset-3" style="background-color:AliceBlue">
<h2 align="center">Choose Only CSV File</h2><br>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" class="form-control" id="file" name="file"/><br><br>
<input type="submit" class="btn btn-info" value="Import" name="submit" data-toggle="modal" data-target="#myModal"/><br>
</form><br>
</div> 
</div>
<br><br>
 
</body>

</html>


<?php
if (isset($_POST["submit"]))
{
	
	$del = "SELECT * FROM shortlink";
    $res = mysqli_query($connect,$del);
    $numdel = mysqli_num_rows($res);
	if( $numdel > 0 )
	{
		$query21 = "delete from shortlink";		                              		                                 	                              		             
		mysqli_query($connect,$query21);	
	}
			
	if($_FILES['file']['name'])
	{
		$numrows = 1;				
		$filename= explode(".",$_FILES['file']['name']);
		if(($filename[1] =='xlsx')||($filename[1] =='csv'))
		{			
			$handle = fopen($_FILES['file']['tmp_name'],"r");
			while( $data = fgetcsv($handle))
			{	
		        //$numcols = count($data);
				//echo $numcols;
				$item1 = mysqli_real_escape_string($connect,$data[0]);
				$item2 = mysqli_real_escape_string($connect,$data[1]);					
				$sql = "INSERT INTO link( id,url ) values ('$item1','$item2')";
				mysqli_query($connect,$sql);				
			}
			fclose($handle);
				  $numbers = array();    
				  $data = array();			 
				  for ($i = 0; $i < 100; $i++)
				  {
					  $numbers[] = rand(1999, 9999);
					  $data10[] = "(" . addslashes($numbers[$i]) . ")";
					  //var_dump($data10). "<br />";
					  $data11 = implode("," , $data10);
					  //echo $data11. "<br />";
					  $site = "http://localhost/Short_URL";			  
				  }                	  
					$sql1 = "INSERT INTO shorturl (short_url) VALUES $data11";
					mysqli_query($connect,$sql1);			 
							
					 $sql3 = "SELECT * from link";
					 $sql4 = "SELECT * from shorturl";
				if (($result = mysqli_query($connect,$sql3))&& ($result1 = mysqli_query($connect,$sql4)))
				   {
					while (($row = mysqli_fetch_assoc($result))&&($row1 = mysqli_fetch_assoc($result1)))
					{
                        $id = $row['id'];
                        $url = $row['url'];
						$short_url = $row1['short_url'];
						//echo $id. "<br />";
						//echo $url. "<br />";
						//echo $short_url. "<br />";
					$sql5 = "INSERT INTO shortlink( id,url,short_url) values ('$id','$url','$short_url')";
					         mysqli_query($connect,$sql5); 

					$sql6 = "SELECT * from shortlink";	 
						if ($result2 = mysqli_query($connect,$sql6))
						 {						  
						  while ($row2 = mysqli_fetch_assoc($result2))
							{
							$id = $row2['id'];
							$url = $row2['url'];
							$short_url = $row2['short_url'];
                            //echo $short_url. "<br />";							
							}						 						  
						 }
						 
					echo "<div class='container'>";					
					echo "<div class='col-md-7' style='background-color:AliceBlue;'>";
					echo "<b>URL: </b><input  type='text' size='80'style='margin-bottom:5px;' class='' value='$url'>";
                    echo "</div>";
                    echo "<div class='col-md-5' style='background-color:AliceBlue'>";					
					echo "<b>Short URL: </b><input  type='text' size='40' class='' style='margin-bottom:5px;' value='$site/$short_url'>"; 
					echo "</div>";
                    echo "</div>";					
                    $query1 = "delete from link";
                    $query2 = "delete from shorturl";		                              		                                 	                              		             
		            mysqli_query($connect,$query1);	
		            mysqli_query($connect,$query2);						
		           					
					}
				   }
				
		}	
					
    }
}
?>
