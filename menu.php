 <?php

include 'database_connect.php';

// will come from  update data.
/*Checking user is logged in or not */

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      
   //echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
   // echo $_SESSION['round'];

} else {
    header('location : signin_page.php');
}


$today = date("Y-m-d");
$deadline ='';
$_SESSION['deadline']='';

     $q = "SELECT *FROM `event_details`";
     $query = mysqli_query($con,$q);

     while($res = mysqli_fetch_array($query)){
        $deadline = $res['deadline'];
        $_SESSION['deadline']=$deadline;
     }


  
/*  $quiz_table = 'quiz_test_update';
  $coding_table =' coding_test_update';
  $random_table = 'random_test_update';
  $interview_table = 'interview_test_update';
*/

 


  /*row*/
/*Checking all the database contains same round number or not*/

  $arr=[];
  $show='0';
  $table =array("quiz_test_update", "coding_test_update", "interview_test_update","random_test_update");
  
  for($i=0; $i<4; $i++){

  $round = $_SESSION['round'];
  
  $sql_total ="SELECT * FROM $table[$i]"; 
  $sql_verified ="SELECT * FROM $table[$i] WHERE round=$round"; 

  $result_1 = mysqli_query($con,$sql_total);
  $result_2 = mysqli_query($con,$sql_verified);

   $rowcount_1 = mysqli_num_rows($result_1);
   $rowcount_2 = mysqli_num_rows($result_2);

   if($rowcount_1 != $rowcount_2 || ($rowcount_1==0)){
      $show='1';
      $arr[$i]='0';

   }
   else{   

     $arr[$i]='1';
   }
 
 }

/********************************************************************************************************************************************************/
   


   if(isset($_POST['done_event'])){
    
    $true = true;
    json_decode(file_get_contents('php://input'),$true);

    /*move to api*/


      /*QUIZ*/
     $sql1 = "DELETE FROM  `quiz_api`";
     if(mysqli_query($con,$sql1)) {
      echo '{"result": "Data deleted"}';
     }
     else{
      echo '{"result": "Failed to delete"}';
     }

     $sql2 = "INSERT INTO `quiz_api` SELECT *FROM `quiz_test_update`";
     if (mysqli_query($con,$sql2)) {
      echo '{"result": "Data inserted"}';
     }
     else{
      echo '{"result": "Failed to insert"}';
     }

    /*CODING*/
     $sql1 = "DELETE FROM  `coding_api`";
     if(mysqli_query($con,$sql1)) {
      echo '{"result": "Data deleted"}';
     }
     else{
      echo '{"result": "Failed to delete"}';
     }

     $sql2 = "INSERT INTO `coding_api` SELECT *FROM `coding_test_update`";
     if (mysqli_query($con,$sql2)) {
      echo '{"result": "Data inserted"}';
     }
     else{
      echo '{"result": "Failed to insert"}';
     }
      
      /*INTERVIEW*/
     $sql1 = "DELETE FROM  `interview_api`";
     if(mysqli_query($con,$sql1)) {
      echo '{"result": "Data deleted"}';
     }
     else{
      echo '{"result": "Failed to delete"}';
     }

     $sql2 = "INSERT INTO `interview_api` SELECT *FROM `interview_test_update`";
     if (mysqli_query($con,$sql2)) {
      echo '{"result": "Data inserted"}';
     }
     else{
      echo '{"result": "Failed to insert"}';
     }
    
          /*RANDOM*/
     $sql1 = "DELETE FROM  `random_api`";
     if(mysqli_query($con,$sql1)) {
      echo '{"result": "Data deleted"}';
     }
     else{
      echo '{"result": "Failed to delete"}';
     }

     $sql2 = "INSERT INTO `random_api` SELECT *FROM `random_test_update`";
     if (mysqli_query($con,$sql2)) {
      echo '{"result": "Data inserted"}';
     }
     else{
      echo '{"result": "Failed to insert"}';
     }

    /*************************/
     

     $q = "select *from admin_details";
     $query = mysqli_query($con,$q);
     while($res = mysqli_fetch_array($query)){
          $round = $res['round_no'];
          $status = $res['status'];
          $round_next = $res['next_round'];
     }

    $date = $_POST['date'];
    $_SESSION['round'] = $round;

        
     $date = date('Y-m-d', strtotime($_POST["date"]));
     if($round==1){

     json_decode(file_get_contents('php://input'),$true); 
     $q = "INSERT INTO `event_details`(`round`, `deadline`) VALUES ('$round','$date')";

   }
   else{
         json_decode(file_get_contents('php://input'),$true);
     $q = "UPDATE `event_details` SET `round`='$round',`deadline`='$date'";
   }

     if($query = mysqli_query($con,$q)){
      
      json_decode(file_get_contents('php://input'),$true);

      $_SESSION['current_round'] = $round;
      $_SESSION['date'] = $date;

  

      $round_next = $round + 1;
      echo $round_next;
      $q = "UPDATE `admin_details` SET `round_no`='$round_next',`next_round`='$round_next'";
      $query = mysqli_query($con,$q);
      $_SESSION['round']=$round_next;
      echo "data inserted";
      header('location:new.php');

     }else{

      // echo "Failed to insert";
     }

          


   }


  
?>




<!DOCTYPE html>
<html lang="en">
<head>

  <title>e</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- For date picker  -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="CSS/menu.css" rel="stylesheet"> 
</head>






<body>

          <!--  Home  -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">

      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="menu.php">Admin <!-- - <?php echo  $_SESSION['username'] ; ?>  --><span class="sr-only">(current)</span></a>
          </li>
        


              <!-- Drop Down  -->
              <div class="dropdown show  ">

                <a class="btn btn-outline-info dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">APIs</a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="APIs/QuizTestApi.php">Quiz Test</a>
                  <a class="dropdown-item" href="APIs/CodingTestApi.php">Coding Test</a>
                  <a class="dropdown-item" href="APIs/InterviewQuestionApi.php">Interview Question</a>
                  <a class="dropdown-item" href="APIs/RandomTestApi.php">Random Test</a>
                  
                </div>
              </div>
      
        </ul>
       </div>

    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="menu.php">Online Events - Next Round #<?php echo  $_SESSION['round'] ?> </a>
    </div>
      
      <!-- Logout -->


          <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="logout.php" class="btn btn-outline-primary my-2 my-sm-0">Logout</a>
            </li>
        </ul>
    </div>

      

    </nav>


<!--  Main-->
   <main role="main" class="container" style="margin-top: 40px">
 

<!-- Check update availability -->
<?php
  //echo $deadline;
  //echo $today;
 if($deadline<$today){
   ?>
   <div class="alert alert-primary" role="alert">
   <b>Please update online event<br>
   </div>
   <?php
   }
   else{
     
     ?>
     
     <div class="alert alert-primary" role="alert">
     <b>(Round-<?php echo $round-1?>) is going on...<br>
     Deadline - (<?php echo $_SESSION['deadline'] ?>)
    </div>
   <?php
   }

?>

<!-- ******************************************** -->

  <div class="card-deck">

<!--  <div class="heading">
      <h1 class="h1 mb-3 font-weight-light card-header bg-dark text-white text-center">Online Events</h1>
</div>
 -->

  
  <div class="card btn-outline-light text-dark" style="width:100px">
    <img class="card-img-top" src="Images/quiz.png" alt="Card image" style="width:100%">
    <div class="card-body text-center">
      <h4 class="card-title">Quiz Test</h4>
        
        
      <div style="margin-top: 15px">
        <!-- Button for quiz test update page -->
         <a href="Update/QuizTestUpdate.php" class="btn btn-primary text-white btn-sm">Add+</a> 
          <!-- Button for quiz test display page -->
         <a href="Display/QuizTestDisplay.php" class="btn btn-secondary text-white btn-sm" style="margin-left: 10px">Preview</a> 

        <a href="Display/Library.php?event=1" class="btn btn-success text-white btn-sm" style="margin-left: 10px">Archive</a> 

      </div>


    </div>
  </div>
  <br>

  <div class="card btn-outline-light text-dark" style="width:100px;">
    <img class="card-img-top" src="Images/coding.png" alt="Card image" style="width:100%;">
    <div class="card-body text-center">
      <h4 class="card-title">Coding Test</h4>
      
      <div style="margin-top: 15px">
      <!-- Button for coding test update page -->
          <a href="Update/CodingTestUpdate.php" class="btn btn-primary text-white btn-sm">Add+</a> 
      <!-- Button for coding test display page -->
          <a href="Display/CodingTestDisplay.php" class="btn btn-secondary text-white btn-sm" style="margin-left: 10px">Preview</a> 

          <a href="Display/Library.php?event=2" class="btn btn-success text-white btn-sm" style="margin-left: 10px">Archive</a> 
      </div>

    </div>
  </div>
  <br>

    <div class="card btn-outline-light text-dark" style="width:100px">
    <img class="card-img-top" src="Images/interview.png" alt="Card image" style="width:100%">
    <div class="card-body text-center">
      <h4 class="card-title">Interview Question</h4>
       
      <div style="margin-top: 15px">
       <!-- Button for interview Question update page -->
          <a href="Update/InterviewQuestionUpdate.php" class="btn btn-primary text-white btn-sm" style="">Add+</a> 
       <!-- Button for interview Question display page -->
          <a href="Display/InterviewQuestionDisplay.php" class="btn btn-secondary text-white btn-sm" style="margin-left: 10px">Preview</a>

            <a href="Display/Library.php?event=3" class="btn btn-success text-white btn-sm" style="margin-left: 10px">Archive</a> 
     </div>

    </div>
  </div>
  <br>

  <div class="card btn-outline-light text-dark" style="width:100px">
    <img class="card-img-top" src="Images/random.png" alt="Card image" style="width:100%">
    <div class="card-body text-center">
      <h4 class="card-title">Random Test</h4>
      
     <div style="margin-top: 15px">
      <!-- Button for random test update page -->
           <a href="Update/RandomTestUpdate.php" class="btn btn-primary text-white btn-sm">Add+</a> 
      <!-- Button for random test display page -->
           <a href="Display/RandomTestDisplay.php" class="btn btn-secondary text-white btn-sm" style="margin-left: 10px">Preview</a> 

             <a href="Display/Library.php?event=4" class="btn btn-success text-white btn-sm" style="margin-left: 10px">Archive</a> 

    </div>

    </div>
  </div>
  <br>




</div>



<div class="text-center" style="margin: 50px">
<!-- <button type="button" class="btn btn-dark btn-lg btn-block">Update Event</button> -->

<!--  -->
    <!-- Button trigger modal -->


<form form method="post" name="Form"  action="" >
    
  <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#exampleModalLong">Update Event </button>

        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Event (Round-<?php echo  $_SESSION['round']  ?>) </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      
   
   <div class="">
   

   <table class="" style="text-align: left;">
     
    <tr>
    <td> Quiz test</td> 

    <?php
     if($arr[0]=='1'){
        ?>      
       <td> <i class="fa fa-check" aria-hidden="true" style="color: green; margin-left:5px;"> </i> </td>
      <?php
     }
     else{

        ?>      
       <td> <i class="fa fa-close" aria-hidden="true" style="color: red; margin-left:5px;"> (Round number didn't matched) </i> </td>
      <?php
     }
    ?>
    
    </tr>

    <tr>
    <td> Coding Test test</td>

        <?php
     if($arr[1]=='1'){
        ?>      
       <td> <i class="fa fa-check" aria-hidden="true" style="color: green; margin-left:5px;"></i> </td>
      <?php
     }
     else{

        ?>      
       <td> <i class="fa fa-close" aria-hidden="true" style="color: red; margin-left:5px;"> (Round number didn't matched) </i> </td>
      <?php
     }
    ?>

    </tr>

    <tr>
    <td> Interview Question test </td>

        <?php
     if($arr[2]=='1'){
        ?>      
       <td> <i class="fa fa-check" aria-hidden="true" style="color: green; margin-left:5px;"></i> </td>
      <?php
     }
     else{

        ?>      
       <td> <i class="fa fa-close" aria-hidden="true" style="color: red; margin-left:5px;"> (Round number didn't matched) </i> </td>
      <?php
     }
    ?>

    </tr>

    <tr>
    <td> Random test</td>
       <?php
     if($arr[3]=='1'){
        ?>      
       <td> <i class="fa fa-check" aria-hidden="true" style="color: green; margin-left:5px;"></i> </td>
      <?php
     }
     else{

        ?>      
       <td> <i class="fa fa-close" aria-hidden="true" style="color: red; margin-left:5px;"> (Round number didn't matched) </i> </td>
      <?php
     }
    ?>
    </tr>

   </table>



   </div>



      <!--  Date picker  -->

   <strong>Deadline</strong>
        <div class="form-group">
            <div class="form-group was-validated" novalidate="">
                <div class="input-group" id="datetimepicker4" data-target-input="nearest" type="">
                    <input type="text" class="form-control datetimepicker-input form-group" data-target="#datetimepicker4" required="" id="inputSuccess2" name="date" />
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text">  <i class="fa fa-calendar" style="color: blue"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'L'
                });
            });
        </script>





        
      </div>
      <div class="modal-footer">
         
        <?php


     if($show=='1' || ($today<$deadline)){
        ?>
        <h5 style="color: red"> Event already going on....<h5>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="visibility: hidden;">Close</button>      
        <button type="submit" class="btn btn-primary" style="visibility: hidden;">Update event</button>
      <?php
     }
     else{

        ?>
       <button type="button" class="btn btn-secondary" data-dismiss="modal" style="visibility: visible;">Close</button>      
       <button type="submit" class="btn btn-primary" name="done_event" style="visibility: visible;" >Update event</button>

      <?php
     }
    ?> 

      
       
      </div>
    </div>
  </div>
</div>

      

</form>

<!-- Modal -->

<!--  -->

</div>
    
 </main>





</body>
</html>
