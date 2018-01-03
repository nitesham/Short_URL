
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
		<?php
echo "hi";
         ?>
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>







<?php
//$server = 'localhost';
//$user = 'root';
//$pass = '';
//$db = 'excel';

//mysql_select_db($server,$user,$pass);
//mysql_connect($db);
?>

<?php
    
    
	/* 	$j = 1;
    while($j < 10){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
	$length = 4;
	
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
	 $j++;
    return $randomString;
	} */

   //$charset ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   
   
   /*  function generateRandomString($length = 4) { ///// good
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$numbers = array();    
$i = 0;
$times_to_run = 10;
while ($i++ < $times_to_run)
{
    $numbers[] = generateRandomString();
	echo $numbers[1].'<br/>';
}  
   foreach ($numbers as $number)
    echo ($number) . "<br />";   */
	
   /* function RandomString($length) {
    $keys = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));

    $key = "";
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}

  echo RandomString(4); */
  
            
  

     $numbers = array();    //////good

    for ($i = 0; $i < 5; $i++)
	
       $numbers[] = rand(1, 1000);
	    echo  $numbers[0] ;
	    echo  $numbers[1] ;
	    echo  $numbers[2] ;
	    echo  $numbers[3] ;
	    echo  $numbers[4] . "<br />";
     foreach ($numbers as $number)
     echo ($number) . "<br />";  
	//echo  count($number);
	
	/* $numbers = array();    //////good
     $len = 4;
     for ($i = 0; $i < 100; $i++)
		 
	  $keys = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));
	  
         for($i=0; $i < $len; $i++) {
        $numbers[] = $keys[mt_rand(0, count($keys) - 1)];
           }
       //$numbers[] = rand(1, 1000);

   foreach ($numbers as $number)
    echo ($number) . "<br />"; */
	
	
	
	/* function randomAttempts($passNthNumberToBeEchoed)
{
      $i=1;
      while($i<=20)
      {
          $randNum =  rand(1,100);

          if($passNthNumberToBeEchoed==$i){
            echo "The number is " . $randNum  . "<br>";
            }

          $i++;
      }
}
    echo randomAttempts(); */
	
	

	
	
	
?>