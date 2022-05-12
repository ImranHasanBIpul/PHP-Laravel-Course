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
    function valited($message, $alerttype ="danger"){
        return "<div class=\"alert alert-{$alerttype} alert-dismissible fade show\" role=\"alert\">
               {$message}!
               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
               </div>";    
    }

    /**
     * valid Email function
     */
    function valitedEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }else{
            return false;
        }
    }
    
    /**
     * valid Edu Email function
     */
    function filterEduMail($email){
        $validemails = ['diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd'];
        $emailArr = explode("@", $email, 2);
        if(in_array($emailArr[1], $validemails)){
            return true;
        }else{
            return false;
        }
        return $emailArr[1];
    }

    

        if(isset($_POST["registerBtn"])){
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $userPhone = $_POST["userPhone"];
            $userPass = $_POST["userPass"];

           
           if(empty($userName) || empty($userEmail)|| empty($userPhone) || empty($userPass)){
               $validitionmsg = valited("All field is required");   

           }elseif (valitedEmail($userEmail) == false){
            $validitionmsg = valited("Email is not valid", "warning");
           }
           elseif (filterEduMail($userEmail) == false){
            $validitionmsg = valited("Email is not Eligible", "warning");
           }

           else{
            $validitionmsg = valited("Everything is okay", "success");
           }
        }
    ?>


  <div class="container">
      <div class="section">
          <div class="row">
            <h2>Registration Form</h2>
            <?php
            if (isset($validitionmsg)){
                echo $validitionmsg;
            }
            ?>
         


        <form method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="userName" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input type="text" name="userEmail" class="form-control" id="Email">
        </div>
        <div class="mb-3">
            <label for="Phone" class="form-label">Number</label>
            <input type="tell" name="userPhone" class="form-control" id="Phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="userPass" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="registerBtn" class="btn btn-primary">Submit</button>
        </form>
          </div>
      </div>
    </div>

 











    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>