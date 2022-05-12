<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .container{
            margin-top: 40px;
            max-width: 500px;
            /* border: 1px solid gray; */
            box-shadow: 2px 2px 10px 4px #bdc3c7;
            border-radius: 10px;
        }
        .container form{
            padding: 20px;
            padding-top: 0 !important;
        }
    </style>
  </head>
  <body>
  <?php 
/*
  if (isset($_POST["userSubmit"])){
    $userName = $_POST["userName"]; 
    $userEmail =  $_POST["userEmail"];

      if(empty($userName) || empty($userEmail)){
          $validationMsg = "All Field is Requred";
      }else{
        $validationMsg = "Everything is ok";
      }
  }
  */
//  $error = null;
//  $success = null;
function validate($msg, $color){
        return "<div class=\"alert alert-{$color} alert-dismissible fade show\" role=\"alert\">
        {$msg}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>";
}
/**
 * email function 
 * validate email check
 */
function validateEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

/**
 * Valid Edu mail
 * 
 */
function validEdumail($email){
    $emails = ['nu.edu.bd', 'du.edu.bd', 'amc.edu.bd'];
   $emailArr = explode("@", $email, 2);
    if(in_array($emailArr[1], $emails)){
        return true;
    }else{
        return false;
    }
}







if (isset($_POST["userSubmit"])){
    $userName = $_POST["userName"]; 
    $userEmail =  $_POST["userEmail"];


    if(empty($userName)||empty($userEmail) ){
        $validationMsg = validate("All Field is Requred", "danger");
    }elseif(validateEmail($userEmail) == false){
        $validationMsg = validate("Email is not valid", "warning");
    }elseif(validEdumail($userEmail) == false){
        $validationMsg = validate("Email is not Eligible", "warning");
    }
    else{
        $validationMsg = validate("Everything is ok", "success");
    }
    //     $error="<div class=\"alert alert-danger\" role=\"alert\"> All Field Are Required </div>";
    // }
    // else{
    //     $success="<div class=\"alert alert-success\" role=\"alert\"> Your Form Submited </div>";
    // }
 } ?>
<div class="container">
        <div class="section">
            <div class="row">
                <h1>Form</h1>
                <?php
                if(isset($validationMsg)){
                    echo $validationMsg;
                }
                ?>
              
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="userName" class="form-control" id="exampleInputName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" name="userEmail" class="form-control" id="exampleInputEmail1">
                    </div>
                    <button type="submit" name="userSubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>









    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>