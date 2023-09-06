<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>



<body>

    <div class="container">
        <h1 class="text-center py-3">PHP BadWords</h1>

        <form action="filter.php" class="card" method="POST">
            <div class="card-body">
                <div class="mb-3">
                    <label class="fs-3">Bad Word</label>
                    <input type="text" class="form-control" name="voldemort">
                </div>
                <div class="mb-3">
                    <label for="text-input" class="form-label fs-3">Testo da inserire</label>
                    <textarea class="form-control" name="text-input" rows="3"></textarea>
                </div>


                <button class="btn btn-primary" type="submit">Si Comincia</button>
            </div>
        </form>
    </div>



</body>

</html>