<?php 
    
     //(Connect to Database)
	$conn = mysqli_connect('localhost', 'pawsitive', '1234', 'pawsitive_sad');

	  // Check Conncetion
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>

