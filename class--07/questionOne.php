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
$questionSet = [
    [
        'question' => 'What is HTML?',
        'options' => [
            'ans1', 
            'ans2', 
            'ans3', 
            'ans4'
        ],
    ],
    [
        'question' => 'What is CSS?',
        'options' => [
            'ans1', 
            'ans2', 
            'ans3', 
            'ans4'
        ],
    ],
    [
        'question' => 'What is PHP?',
        'options' => [
            'ans1', 
            'ans2', 
            'ans3', 
            'ans4'
        ],
    ]
    ];
 ?>
    <div class="container">
        <h2 class="text-center mt-5">PHP to Advance Laravel Exam</h2>
        <div class="row">
        <?php
        shuffle($questionSet);
           foreach($questionSet as $key => $quest){ 
                echo ++$key." ". $quest["question"];
                foreach($quest["options"] as $key2 => $mcq){
        ?> 
    <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault <?php echo $key;?>" id="flexRadioDefault1">
            <?php echo $mcq;?>
        </div>

        <?php }}?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>