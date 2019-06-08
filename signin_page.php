<?php
 
 include 'database_connect.php';

/*Preventing logged user to back into login page again*/


 session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('location:menu.php');
 

}

/***********************/  

 if(isset($_POST['done'])){

     
     $username = $_POST['username'];


     $q = "select *from 
     admin_details where username = '$username'";
     $query = mysqli_query($con,$q);
     $num = mysqli_num_rows($query);


     while($res = mysqli_fetch_array($query)){
          echo $round = $res['round_no'];
          echo $status = $res['status'];
          $round_next = $res['next_round'];
     }
    


     if($num == 1){

       session_start();
       $_SESSION['round'] = $round;
       $_SESSION['round_next'] = $round_next;
       $_SESSION['username'] = $username;
       $_SESSION['loggedin'] = true;
       header('location:menu.php');
       exit();
     }

       else{ 

    /* Alert dialog for invalid username*/
       ?>      
       <div class="alert alert-primary" role="alert">
        Invalid Username !!! </div>
      <?php

      /*******************/
        }
  


 }


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

         <!-- Custom styles for this template -->
       
        <link href="CSS/signin_page.css" rel="stylesheet"> 
        
</head>




 <body class="card deck">

  

            <div class="heading">
                <h1 class="display-4 text-center font-weight-light">Programming Guide</h1>
            </div>




            <form class="form-signin text-center" method="post">

                <h1 class="h1 mb-3 font-weight-light card-header bg-dark text-white">Admin Panel</h1>
         
                <input name="username" type="username" class="form-control" placeholder="Username" required autofocus> <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="done">Sign in</button>

                <p class="mt-5 mb-3 text-muted">&copy; programming-guide 2019</p>

            </form>


  </body>
</html>
