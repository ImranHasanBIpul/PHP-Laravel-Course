<?php
// echo $_POST["userName"]."<br>";
// echo $_POST["userEmail"]."<br>";
// echo $_POST["userPhone"]."<br>";
// echo $_POST["userPass"]."<br>";



 $userName = $_POST["userName"];
 $userEmail = $_POST["userEmail"];
 $userPhone = $_POST["userPhone"];
 $userPass = $_POST["userPass"];


if($userName == "" || $userEmail == "" || $userPhone == "" || $userPass == ""){
    echo '<script> alert("all field Required"); </script>';
           
}else{
    echo "everything is ok";
}
