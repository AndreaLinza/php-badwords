<?php
var_dump($_POST);
$voldemort = $_POST["voldemort"];
$text = $_POST["text-input"];
$text_lower = strtolower($text);
$voldemort_lower = strtolower($voldemort);
$text_lenght = strlen($text);
$voldemort_text = str_replace($voldemort_lower, "***", $text_lower);
$voldemort_lenght = strlen($voldemort_text);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>



<body>

    <div class="container text-center">
        <h1 class="text-center py-3">PHP BadWords</h1>

        <h4>Il testo precedente era lungo:<span class="text-danger"> <?php echo $text_lenght ?></span></h4>
        <h4>Il testo ora è lungo:<span class="text-danger"> <?php echo $voldemort_lenght ?></span></h4>
        <div class="card-body text-center">
            <p class="fs-3"><?php echo $voldemort ?></p>
            <p class="fs-3"><?php echo $voldemort_text ?></p>

        </div>
    </div>




</body>

</html>