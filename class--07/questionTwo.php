<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<?php
    $courses = [
      [
       
        'name' => 'Saki Salman',
        'nick_name' => 'Fahad',
        'address' => 'Sunamganj',
        'designation' => 'CEO',
        'image' => 'image-03.jpg',
      ],
      [
       
        'name' => 'Imran Ali',
        'nick_name' => 'Imran',
        'address' => 'Mymensing',
        'designation' => 'Founder',
        'image' => 'image-01.jpg',
      ],
      [
        'name' => 'Jabed Hasan',
        'nick_name' => 'Jabed',
        'address' => 'Lokhipur',
        'designation' => 'Founder',
        'image' => 'image-02.jpg',
      ],
      [
        'name' => 'Jabed Hasan',
        'nick_name' => 'Jabed',
        'address' => 'Lokhipur',
        'designation' => 'Founder',
        'image' => 'image-01.jpg',
      ],
 
    ]
    ?>

<div class="container mt-5">
        <h2 class="text-center">Our Team Members</h2>
        <div class="section mt-5">
            <div class="row">
            <?php
  foreach($courses as $key => $cours){         
  ?>
                <div class="col-md-3">
                  <div class="card1 m-1 text-center">
                  <img class="rounded-circle" src="img/image-01.jpg" alt="" width = "200" height = "200">
                    <div class="card-body mt-2">
                        
                        <h5> <?php echo $cours['name'];?> </h5> 
                        <p class="p-0 m-0"> <?php echo $cours['nick_name'];?> </p> 
                        <p class="p-0 m-0"> <?php echo $cours['address'];?> </p> 
                        <p class="p-0 m-0"> <?php echo $cours['designation'];?> </p> 
                     
                        <span class="fa-brands fa-facebook"></class=></span>
                        <span class="fa-brands fa-instagram-square"> </span>
                        <span class="fa-brands fa-linkedin"> </span>
                        <span class="fa-brands fa-pinterest"></span>
                        <span class="fa-brands fa-youtube"> </span>         
                  </div>
                </div>
            
            </div>
            <?php }?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>