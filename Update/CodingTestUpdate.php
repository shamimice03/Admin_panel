 <?php
 
  include '../database_connect.php';
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   //echo "Welcome to the member's area, " . $_SESSION['username'] . "!";

  } else {
    header('location : signin_page.php');
  }

    
    $table = 'coding_test_update';

    if(isset($_POST['done'])){
    
    $true = true;
    json_decode(file_get_contents('php://input'),$true);

   //	$admin_username = $_POST['admin_username'];
   	$question = $_POST['question'];
   	$option_a = $_POST['option_a'];
   	$option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
   	$option_d = $_POST['option_d'];
   	$ans1 = $_POST['ans1'];
   	$ans2 = $_POST['ans2'];
   	$marks = $_POST['marks'];
   	$time = $_POST['time'];
   	$round = $_SESSION['round'];
   


/*
         echo "$admin_username";
          echo "\n";
         echo "$question";
          echo "\n";
         echo "$option_a";
          echo "\n";
         echo "$option_b";
          echo "\n";
         echo "$option_c";
          echo "\n";
         echo "$option_d";
          echo "\n";
         echo "$ans1";
          echo "\n";
         echo "$ans2";
          echo "\n";
         echo "$marks";
          echo "\n";
         echo "$time";
          echo "\n";
         echo "$round";

*/


     $q = "INSERT INTO $table (`question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `marks`, `time`, `round`)  VALUES ('$question','$option_a','$option_b','$option_c','$option_d','$ans1','$marks','$time','$round')";

     if($query = mysqli_query($con,$q)){
        
       // echo "data inserted";
      header('location:../Display/CodingTestDisplay.php');

     }else{

      // echo "Failed to insert";
     }

/*     if (!$query) {
      printf("Errormessage: %s\n", mysqli_error($con));
      }
     */

      
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






 <script type="text/javascript">


function myFunction() {
  
 var question = document.getElementById("question").value;
 var option_a = document.getElementById("option_a").value;
 var option_b = document.getElementById("option_b").value;
 var option_c = document.getElementById("option_c").value;
 var option_d = document.getElementById("option_d").value;
 var ans1 = document.getElementById("ans1").value;
 var ans2 = document.getElementById("ans2").value;
 var marks = document.getElementById("marks").value;
 var time = document.getElementById("time").value;
 var round = document.getElementById("round").value;



   
  if(ans1 != ans2){
    alert("Correct Option & Correct Option(*Again) should be same");
        document.getElementById("Validation").type="button";
  }

  else if(question=='' || option_a=='' || option_b=='' ||  option_c=='' ||  option_d=='' ||  ans1=='' || time=='' ||  round==''){
        //alert("he");
    
    }else{
        //alert("Please Enter Your Name");
          document.getElementById("Validation").type="button";
          document.getElementById("Validation").style.visibility="hidden";
          document.getElementById("preview").style.visibility="visible";
    }


}

    /*Live data without refresh page in java script*/ 
      function myFun() {

      setInterval(function() {
                       
       var QuestionView = document.getElementById("QuestionView");
       var Option_aView = document.getElementById("option_aView");
       var Option_bView = document.getElementById("option_bView");
       var Option_cView = document.getElementById("option_cView");
       var Option_dView = document.getElementById("option_dView");
       var CorrectAns = document.getElementById("CorrectAns");
       var Marks_view = document.getElementById("marks_view");
       var Round_view = document.getElementById("round_view");
       var Time_view = document.getElementById("time_view");
       



       var question = document.getElementById("question").value;
       var option_a = document.getElementById("option_a").value;
       var option_b = document.getElementById("option_b").value;
       var option_c = document.getElementById("option_c").value;
       var option_d = document.getElementById("option_d").value;
       var ans1 = document.getElementById("ans1").value;
       var ans2 = document.getElementById("ans2").value;
       var marks = document.getElementById("marks").value;
       var time = document.getElementById("time").value;
       var round = document.getElementById("round").value;


   

        QuestionView.innerHTML = 'Question : ' + question;
         Option_aView.innerHTML = 'Option-A : ' + option_a;
          Option_bView.innerHTML = 'Option-B : ' + option_b;
           Option_cView.innerHTML = 'Option-C : ' + option_c;
            Option_dView.innerHTML = 'Option-D : ' + option_d;
             CorrectAns.innerHTML = 'Correct Option : ' + ans1;
              Marks_view.innerHTML = 'Marks : ' + marks;
               Time_view.innerHTML = 'Time : ' + time;
                Round_view.innerHTML = 'Round : ' + round;
         
        }, 10);
        }


        /***************************/


</script>


<!--  -->

</head>






<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">

        <ul class="navbar-nav mr-auto">
           
           <!-- Home  -->

            <li class="nav-item active">
                 <a class="nav-link" href="../menu.php"> Home </a>
            </li>

   
            <!-- Display -->
             <li class="nav-item active">
                 <a class="nav-link" href="../Display/CodingTestDisplay.php"> Display </a>
            </li>

            <!-- API -->
             <li class="nav-item active">
                 <a class="nav-link" href="../APIs/CodingTestApi.php"> API </a>
            </li>


    </div>


             <!-- Heading -->
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="CodingTestUpdate.php">Coding Test - Update Panel</a>
    </div>


            <!-- Logout -->
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                 <a href="../logout.php" class="btn btn-outline-primary my-2 my-sm-0">Logout</a>
            </li>
        </ul>
    </div>


</nav>




<!-- ***************************************************MENU************************************************** -->



<!--  Main-->
 <main role="main" class="container" style="margin-top: 30px">




 <form method="post" name="Form"  action="" >

 <div class="card" style="padding: 20px">
      
      <strong>Question</strong>
    <hr style="border-top: 1px dotted;"><br>


 <!-- Question Box -->
    <div class="was-validated" novalidate="">
       
       <Textarea class="form-control"  rows="10" type="code" id="question"  required="" placeholder="Type your question here"   autofocus="autofocus" name="question" method="post"></textarea>
       <div class="invalid-feedback">Question required</div>
        


     </div>  



  </div>   

  <!-- ********************** -->
 <br> <br>




<div name="form-group" method="post" >

<div class="card" style=" padding: 20px">

<!-- Ans Option -->
 <div class="was-validated" novalidate="" method="post">

 
 <div class="form-group" method="post">

   <strong> Options</strong>
   <hr style="border-top: 1px dotted;">
  

  <div class="row">

    <div class="col">

      <strong>Option - A</strong>
       <input type="text" class="form-control" name="option_a" required="" id="option_a">
       <div class="invalid-feedback">Option-A required</div>
    </div>

    <div class="col">
        <strong>Option - B</strong>
             <input type="text" class="form-control" name="option_b" required="" id="option_b" value="">
       <div class="invalid-feedback">Option-B required</div>
    </div>
  </div>
</div>

 <div class="row">

    <div class="col">
      <strong>Option - C</strong>
            <input type="text" class="form-control" name="option_c" required="" id="option_c">
       <div class="invalid-feedback">Option-C required</div>
    </div>

    <div class="col">
      <strong>Option - D</strong>
        <input type="text" class="form-control" name="option_d" required="" id="option_d">
       <div class="invalid-feedback">Option-D required</div>
    </div>
  </div> 

 

</div>



<br>

<!-- Correct Ans -->

    <div class="row form-group was-validated">
     
    <div class="col">

    <strong>Correct Option</strong>
    <select class="custom-select" required name="ans1" id="ans1">
      <option value="">Open this select menu</option>
      <option value="A">Option - A</option>
      <option value="B">Option - B</option>
      <option value="C">Option - C</option>
      <option value="D">Option - D</option>
    </select>
    <div class="invalid-feedback">Select the correct Option</div>
    </div>


     <div class="col">
    <strong>Correct Option (*Again)</strong>
    <select class="custom-select" required name="ans2" id="ans2">
      <option value="">Open this select menu</option>
      <option value="A">Option - A</option>
      <option value="B">Option - B</option>
      <option value="C">Option - C</option>
      <option value="D">Option - D</option>
    </select>
    <div class="invalid-feedback">Select the correct Option as before</div>

     </div>

  </div>  

  
</div>



<br>
<br>


<!-- Marks and Time for question -->

<div class="card" style=" padding: 20px" method="post">

<strong>Marks - Time - Round</strong>
 <hr style="border-top: 1px dotted;">


 <div class="row form-group was-validated">
     
    <div class="col">

    <strong>Marks</strong>

    <select class="custom-select" required name="marks" id="marks">
      <option value="1">1 marks </option>
      <option value="2">2 marks </option>
      <option value="3">3 marks </option>
      <option value="4">4 marks </option>
      <option value="5">5 marks </option>

    </select>
    <div class="invalid-feedback">Select the correct Option</div>
    </div>


     <div class="col">
    <strong>Time</strong>

    <select class="custom-select" required name="time" id="time">
      <option value="30sec"> 0.50 min </option>
      <option value="60sec"> 1.00 min </option>
      <option value="90sec"> 1.50 min </option>
      <option value="120sec"> 2.00 min </option>
    </select>
    <div class="invalid-feedback">Select the correct Option as before</div>

     </div>


<!--  Date picker 

   <div class="col">

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


  </div>   -->


  <div  class="col">

    <strong>Round</strong>
        <input type="text" class="form-control" name="round" required="" id="round" value="<?php echo  $_SESSION['round'] ?>" readonly > </input>
        <div class="invalid-feedback">Round number required</div>
    </div>
    

  </div>


</div>


</div> 

  

<!--  <button class="btn btn-danger btn-block" type="submit" name="doneboy" method="post" style="margin-top: 40px">Validation</button> -->


</div>


 






  <div class="row" style="margin: 50px">
    

    <div class="col">

                 <button class="form-control btn-dark" name="post" type="submit" id='Validation' onclick="myFunction()" style="visibility: visible;" >Validation</button>
    </div>

    
                <!-- Button trigger modal -->
                <button  onclick="myFun()" type="button" class="form-control btn-success" data-toggle="modal" data-target="#exampleModalLong" style="visibility: hidden; margin-left:20px ; margin-right:20px;  margin-bottom:" id="preview">
                  Add to Current Event
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Preview</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      
                      <!-- main element -->

                      <!-- live from value preview using myfun() in above button  -->
              <h6>Marks-Time-Round</h6> 
               <hr style="border-top: 1px dotted;">
              <div id="marks_view"> </div>
              <div id="time_view"> </div>
              <div id="round_view"> </div><br>

              <h6>Question-</h6>
               <hr style="border-top: 1px dotted;">
              <div id="QuestionView">  </div><br>

              <h6>Options- </h6>
               <hr style="border-top: 1px dotted;">
              <div id="option_aView"> Option A </div>
              <div id="option_bView"> Option B</div>
              <div id="option_cView"> Option C </div>
              <div id="option_dView"> Option D</div>
              <div id="CorrectAns"> Correct Ans</div>
                                                  
              <!-- ************* -->
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button class="btn btn-primary" type="submit" name="done" ac>Add to Current Event</button>
                      </div>
                    </div>
                  </div>
                </div>
    </div>


  




<!-- *** -->


 
</form>



<!--  -->

</main>


</body>
</html>