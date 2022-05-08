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
          
        }
    </style>


  </head>
  <body>
    <?php
        if(isset($_POST["registerBtn"])){
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $userPhone = $_POST["userPhone"];
            $userPass = $_POST["userPass"];
           
           
           if($userName == "" || $userEmail == "" || $userPhone == "" || $userPass == ""){
               echo '<script> alert("all field Required"); </script>';            
           }else{
               echo "everything is ok";
           }
        }
    ?>


  <div class="container">
      <div class="section">
          <div class="row">

        <form method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="userName" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" name="userEmail" class="form-control" id="Email">
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