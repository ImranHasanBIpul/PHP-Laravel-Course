<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font awsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Practice Project One</title>
  </head>
  <body>

  <?php
//   $product[
//       ['name' => 'aple', 'product_qty' => 20, 'product_price' => 250];
//       ['Name' => 'Banana', 'Product_Qty' => 40, 'Product_Price' => 550];
//       ['Name' => 'Aple', 'Product_Qty' => 20, 'Product_Price' => 250];
//   ]
$products = array(
    array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
    array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
    array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
);
//   foreach($products as $key => $prod){
//       echo $prod['name'].' '. $prod['qty']."<br>";
//   }
  ?>



    <div class="container table-bordered pt-3">
    <table class="table table-striped table-danger align-middle">
  <thead>
    <tr>
      <th scope="col">SL.</th>
      <th scope="col">Name</th>
      <th scope="col">Product Qty</th>
      <th scope="col">Product Price</th>
    </tr>
  </thead>
  <tbody>

      <?php
      $total_qty = 0;
      $total_amount = 0;
        foreach($products as $key => $prod){
            $total_qty += $prod['qty'];  
            $total_amount += $prod['total_price'];  
      ?>
    <tr>
      <th scope="row"><?php echo ++$key?></th>
      <td><?php echo $prod['name'] ?></td>
      <td><?php echo $prod['qty'] ?></td>
      <td><?php echo $prod['total_price'] ?></td>
    </tr>
    <?php }?>

    <tr>
      <th scope="row"></th>
      <td><?php echo "Total"; ?></td>
      <td><?php echo $total_qty ?></td>
      <td><?php echo $total_amount ?></td>
    </tr>

  </tbody>
</table>
    </div>

    <?php
    $courses = [
      [
        'course_name' => 'AML & CFT course for NBFI',
        'author_name' => 'Imran Ali',
        'total_enroled' => 100,
        'course_price' => 9000,
        'sale_price' => 6000,
        'image' => 'image-01.jpg',
      ],
      [
        'course_name' => 'The Art of Public Speaking',
        'author_name' => 'Jabed hasan',
        'total_enroled' => 400,
        'course_price' => 7000,
        'sale_price' => 5000,
        'image' => 'image-02.jpg',
      ],
      [
        'course_name' => 'SQL for Data Science',
        'author_name' => 'Hasan Ali',
        'total_enroled' => 600,
        'course_price' => 3000,
        'sale_price' => 2500,
        'image' => 'image-01.jpg',
      ],
      [
        'course_name' => 'Writing Professional Email',
        'author_name' => 'Saki Salman',
        'total_enroled' => 300,
        'course_price' => 3300,
        'sale_price' => 3000,
        'image' => 'image-03.jpg',
      ]
    ]
    ?>
    <div class="container mb-5">
          <h1 class="text-center mt-5">Courses</h1>
          <div class="section">
            <div class="row mt-5">               
  <?php
  foreach($courses as $key => $cours){         
  ?>
                <div class="col-md-4">
                  <div class="card m-1">
                    <img class="img-thumbnail" src="img/<?php echo $cours['image'];?>" alt="imran">
                    <div class="card-body mt-2">
                        <h5 class="card-title "><b> <?php echo $cours['course_name'];?> </b></h5>
                        <h6> <?php echo $cours['author_name'];?> </h6> 
                        <span>4.7</span>
                        <span class ="fa fa-star checked"></span>
                        <span class ="fa fa-star checked "> </span>
                        <span class="fa fa-star checked "> </span>
                        <span class="fa fa-star"></span>
                        <span class ="fa fa-star"> </span>

                        <div class="row">
                          <div class="col-md-6">
                            <span><?php echo "Price- ". $cours['course_price'];?></span> 
                            <p> <?php echo"Sale Price- ". $cours['sale_price'];?></p> 
                          </div>
                          <div class="col-md-6">
                            <p> <?php echo "Enrolled:- ".$cours['total_enroled'];?> </p>
                          </div>

                        </div>

                        <button class="btn btn-primary" type="submit "> Buy Now</button>
                        </div>
                  </div>
                </div>
                <?php }?>
            </div>
          </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>