<?php
    

    include '../database_connect.php';

  $number =0;
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   //echo "Welcome to the member's area, " . $_SESSION['username'] . "!";

  } else {
    header('location : signin_page.php');
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 
   <link href="../CSS/display.css" rel="stylesheet"> 
  


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
                 <a class="nav-link" href="../Update/InterviewQuestionUpdate.php"> Add+ </a>
            </li>

            <!-- API -->
             <li class="nav-item active">
                 <a class="nav-link" href="../APIs/InterviewQuestionApi.php"> API </a>
            </li>
            
         </ul>

    </div>


             <!-- Heading -->
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="InterviewQuestionUpdate.php">Interview Question Test - Current Event Questions</a>
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




    <?php
             
                 
           include '../database_connect.php';
           
           $q ="SELECT * FROM `interview_test_update`"; 
           $query = mysqli_query($con,$q);

           while($res = mysqli_fetch_array($query)){

           
                    $number++;


   ?>         

<table class="table table-striped table-hover table-bordered">
 

 <div class="card" style="background-color: #243949">



<tr class="text-center">
<td class="text-white" style="width: 10px; background-color: #051937"><b><?php echo $number ?>.</b> </td>
<td style="width: 140px;"> <b> Marks :</b> <?php echo $res['marks']; ?> </td>
<td style="width: 150px;"> <b> Time : </b> <?php echo $res['time']; ?></td>
<td style="width: 150px;"> <b> #Round : </b> <?php echo $res['round']; ?></td>
<td >
 
 <div class="col text-center" >
 <a class="btn btn-secondary btn-sm text-white" style="width: 150px"   href="edit.php?id=<?php echo $res['id']; ?>&event=3" > Edit </a>
 <a class="btn btn-danger btn-sm text-white"  style="width: 150px" href="delete.php?id=<?php echo $res['id']; ?>&event=3"> Delete </a> 
 <a class="btn btn-success btn-sm text-white"  style="width: 150px" href="LibraryMove.php?id=<?php echo $res['id']; ?>&event=3" > Move to archives </a> 
</div>
 

</td>
</tr>


      
  

</table>

<table class="table table-striped table-hover table-bordered">

<tr>
<td style="border-color: grey; height: 100px"><b>Question : </b> <?php echo $res['question']; ?></td>
</tr> 


  
 
</table>

<table class="table table-striped table-hover table-bordered">

<tr>  
<td > <b> Option-A :    <b> <?php echo $res['option_a']; ?></td>
</tr>
<tr>
<td> <b> Option-B :     <b> <?php echo $res['option_b']; ?></td>
</tr>
<tr>
<td > <b> Option-C :    <b> <?php echo $res['option_c']; ?></td>
</tr>
<tr>
<td> <b> Option-D :     <b> <?php echo $res['option_d']; ?></td>
</tr>
<tr>
<td style="color: green"><b> Correct option : <b> <?php echo $res['correct_option']; ?> </td>
</tr>




</table>



     <!--   <hr style="border-top: 2px dotted; color: grey"> -->
      <br><br>

    
    <?php
    }

    ?>    
    

    </div>






  

 </main>

</body>
</html>

