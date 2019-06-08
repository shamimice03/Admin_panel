<?php


include '../database_connect.php';

$id = $_GET['id'];
$event = $_GET['library'];

echo $event;

if($event==1){


     $sql =  "INSERT INTO `quiz_test_update` SELECT *FROM `quiz_library`  WHERE id = $id";

     if (mysqli_query($con,$sql)) {

      echo '{"result": "Data inserted"}';
    $q = "DELETE FROM `quiz_library` WHERE id = $id";
    mysqli_query($con,$q);
    header("location:Library.php?event=1");
     }
     else{
      echo '{"result": "Failed to insert"}';
     }

}

else if($event==2){
  	 $sql =  "INSERT INTO `coding_test_update` SELECT *FROM `coding_library`  WHERE id = $id";
     if (mysqli_query($con,$sql)) {

  	 	echo '{"result": "Data inserted"}';
		$q = "DELETE FROM `coding_library` WHERE id = $id";
		mysqli_query($con,$q);
	  header("location:Library.php?event=2");
  	 }
  	 else{
  	 	echo '{"result": "Failed to insert"}';
  	 }
}
else if($event==3){


     $sql =  "INSERT INTO `interview_test_update` SELECT *FROM `interview_library`  WHERE id = $id";
     if (mysqli_query($con,$sql)) {

    echo '{"result": "Data inserted"}';
    $q = "DELETE FROM `interview_library` WHERE id = $id";
    mysqli_query($con,$q);
    header("location:Library.php?event=3");
     }
     else{
      echo '{"result": "Failed to insert"}';
     }

}
if($event==4){

    $sql =  "INSERT INTO `random_test_update` SELECT *FROM `random_library`  WHERE id = $id";
     if (mysqli_query($con,$sql)) {

      echo '{"result": "Data inserted"}';
      
    $q = "DELETE FROM `random_library` WHERE id = $id";
    mysqli_query($con,$q);
    header("location:Library.php?event=4");
     }
     else{
      echo '{"result": "Failed to insert"}';
     }



}





?>