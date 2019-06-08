<?php

   
   include '../database_connect.php';
   session_start();
  

  $q ="SELECT * FROM `event_details`";
  $result = mysqli_query($con,$q);
  if ($res = mysqli_fetch_array($result)) {
      
      $deadline = $res['deadline'];
      $round = $res['round'];
   }

  
	$q ="select * from quiz_api";
  $result = mysqli_query($con,$q);


   if (mysqli_num_rows($result) > 0) {
   	    
       
   	   $rows = array();  
       $rows["round"]=$round;
       $rows["deadline"]=$deadline;
   	   while ($r = mysqli_fetch_assoc($result)) {
              
              $rows["result"][] = $r;

   	   }
   	   echo json_encode($rows);
   }
   else{
   
   	echo '{"result": "Data not found"}';

   }

?>