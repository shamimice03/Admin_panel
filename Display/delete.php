<?php


include '../database_connect.php';

$id = $_GET['id'];
$event = $_GET['event'];

echo $event;

if($event==1){
$q = "DELETE FROM `quiz_test_update` WHERE id = $id";
mysqli_query($con,$q);
header('location: ../Display/QuizTestDisplay.php');

}
else if($event==2){
$q = "DELETE FROM `coding_test_update` WHERE id = $id";
mysqli_query($con,$q);
header('location: ../Display/CodingTestDisplay.php');
}
else if($event==3){
$q = "DELETE FROM `interview_test_update` WHERE id = $id";
mysqli_query($con,$q);
header('location: ../Display/InterviewQuestionDisplay.php');

}

else if($event==4){
$q = "DELETE FROM `random_test_update` WHERE id = $id";
mysqli_query($con,$q);
header('location: ../Display/RandomTestDisplay.php');

}


?>