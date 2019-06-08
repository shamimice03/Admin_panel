<?php
include '../database_connect.php';
$id = $_GET['id'];
$event = $_GET['event'];
echo $event;
if($event==1){
     $sql =  "INSERT INTO `quiz_library` SELECT *FROM `quiz_test_update`  WHERE id = $id";
     if (mysqli_query($con,$sql)) {
      echo '{"result": "Data inserted"}';
    $q = "DELETE FROM `quiz_test_update` WHERE id = $id";
    mysqli_query($con,$q);
    header('location: QuizTestDisplay.php');
     }
     else{
      echo '{"result": "Failed to insert"}';
     }
}
else if($event==2){
     $sql =  "INSERT INTO `coding_library` SELECT *FROM `coding_test_update`  WHERE id = $id";
     if (mysqli_query($con,$sql)) {
      echo '{"result": "Data inserted"}';
    $q = "DELETE FROM `coding_test_update` WHERE id = $id";
    mysqli_query($con,$q);
    header('location: CodingTestDisplay.php');
     }
     else{
      echo '{"result": "Failed to insert"}';
     }
}
else if($event==3){
     $sql =  "INSERT INTO `interview_library` SELECT *FROM `interview_test_update`  WHERE id = $id";
     if (mysqli_query($con,$sql)) {
    echo '{"result": "Data inserted"}';
    $q = "DELETE FROM `interview_test_update` WHERE id = $id";
    mysqli_query($con,$q);
    header('location: InterviewQuestionDisplay.php');
     }
     else{
      echo '{"result": "Failed to insert"}';
     }
}
if($event==4){
    $sql =  "INSERT INTO `random_library` SELECT *FROM `random_test_update`  WHERE id = $id";
     if (mysqli_query($con,$sql)) {
      echo '{"result": "Data inserted"}';
      
    $q = "DELETE FROM `random_test_update` WHERE id = $id";
    mysqli_query($con,$q);
    header('location: RandomTestDisplay.php');
     }
     else{
      echo '{"result": "Failed to insert"}';
     }
}
?>