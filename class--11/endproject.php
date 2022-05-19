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
        $validemails = ['gmail.com', 'yeaho.com', 'local.com'];
        $emailArr = explode("@", $email, 2);
        if(in_array($emailArr[1], $validemails)){
            return true;
        }else{
            return false;
        }
        // return $emailArr[1];
    }
/**
 * user name validation
 * preg_match('/^\w{5,20}$/',
 */
    function validateUser($username){
        if (preg_match('/^[0-9a-zA-Z_]{5,20}$/', $username)){
            return true;
        }else{
            return false;
        }
    }
        /**
         * value function
         */
    function valueId($valueName){
        if(isset($_POST[$valueName])){
            echo $_POST[$valueName];
        }else{
            echo "";
        }
    }
        /**
         * Clear Data
         */
        // function clearData(){
        //      $_POST = "";
        // }

        // function validGender($ganders){
        //     if(isset($_POST["gender"]))
        // }


        if(isset($_POST["registerBtn"])){
            $username = $_POST["username"];
            $userEmail = $_POST["userEmail"];
            $userPhone = $_POST["userPhone"];
            $userPass = $_POST["userPass"];
            $age = $_POST["age"];
            $gander = "";
            if(isset($_POST["gander"])){
                $gander = $_POST["gander"];
            }
            $agreStatus = "";
            if(isset($_POST["agreStatus"])){
                $agreStatus = $_POST["agreStatus"];
            }
            echo "User Name:-" . $username = $_POST["username"];

            
            if(empty($_POST["username"])){
                $error = "Email is required";
                $flag = false;
            }




         
           if(empty($username) || empty($userEmail)|| empty($userPhone) || empty($userPass) || empty($gander)){
               $validitionmsg = valited("All field is required");   

           }elseif (valitedEmail($userEmail) == false){
            $validitionmsg = valited("Email is not valid", "warning");
           }
           elseif (filterEduMail($userEmail) == false){
            $validitionmsg = valited("Email is not Eligible", "warning");
           }elseif ($age < 18 || $age > 60){
            $validitionmsg = valited("Tomar Boyos Hoinai", "warning");

           }elseif(validateUser($username) == false){
            $validitionmsg = valited("username not valid", "warning");
           }elseif( $agreStatus != "yes"){
            $validitionmsg = valited("please agree turms and condition", "warning");
           }

           else{
            $validitionmsg = valited("Everything is okay", "success");
            $_POST = "";
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

        <form method="POST" action="" autocomplete="on">
        <div class="mb-3">
            <label for="username" class="form-label">user name</label>
            <input type="text" name="username" class="form-control" value="<?php echo valueId("username");?>" id="username">
            <div class="span"> <?php //echo $error;?> </div>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input type="text" name="userEmail" class="form-control" value="<?php echo valueId("userEmail");?>" id="Email">
        </div>
        <div class="mb-3">
            <label for="Phone" class="form-label">Number</label>
            <input type="tell" name="userPhone" class="form-control" value="<?php echo valueId("userPhone");?>" id="Phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="userPass" class="form-control" value="<?php echo valueId("userPass");?>" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="age" name="age" class="form-control" value="<?php echo valueId("age");?>" id="age">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gander" id="flexRadioDefault1" value="male">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gander" id="flexRadioDefault2" value="female" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gander" id="flexRadioDefault2" value="othes" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Othes
                </label>
            </div>
        </div>
        
        <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="yes" name="agreStatus" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Are You Agree?
            </label>
        </div>
        </div>



        <button type="submit" name="registerBtn" class="btn btn-primary">Submit</button>
        </form>
          </div>

          

      </div>
    </div>
            <div class="container">

            <?php
            if(isset($_POST["registerBtn"])){
                echo "User Name:-" . $username = $_POST["username"];
                echo "User Email:-" . $userEmail = $_POST["userEmail"];
                echo "User Number:-" . $userPhone = $_POST["userPhone"];
                echo "Your Password:-" . $userPass = $_POST["userPass"];
                echo "Your Age:-" . $age = $_POST["age"];
                echo "Your Gander:-" . $gander = $_POST["gander"];
                echo "Agree Our Condion:-" . $agreStatus = $_POST["agrestatus"];

            }
            if(isset($_POST["registerBtn"])){
                echo "User Email:-" . $userEmail = $_POST["userEmail"];
       

            }
          
            // echo "<pre>";
            // print_r($_POST);
            
            ?>
            </div>




    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>