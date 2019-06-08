<?php


include '../database_connect.php';

$id = $_GET['id'];
$event = $_GET['library'];



if($event==1){
$q = "DELETE FROM `quiz_library` WHERE id = $id";
mysqli_query($con,$q);
header("location:Library.php?event=1");

}
else if($event==2){
$q = "DELETE FROM `coding_library` WHERE id = $id";
mysqli_query($con,$q);
header("location:Library.php?event=2");
}
else if($event==3){
$q = "DELETE FROM `interview_library` WHERE id = $id";
mysqli_query($con,$q);
header("location:Library.php?event=3");

}

else if($event==4){
$q = "DELETE FROM `random_library` WHERE id = $id";
mysqli_query($con,$q);
header("location:Library.php?event=4");

}


?>