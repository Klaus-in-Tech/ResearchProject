<?php
 //create connection
 $connect=mysqli_connect('localhost','root','odksql','odk_db');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
	echo 'Connected Successfully!!';