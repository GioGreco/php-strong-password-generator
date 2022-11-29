<?php
    include __DIR__.'/functions/functions.php';
    if(isset($_GET['pswLen'])){
        $newPSW = generatePSW($_GET['pswLen']);
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP - psw generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="vh-100 bg-black d-flex">
            <div class="left-section d-flex justify-content-center align-items-center w-25">
                <form class="d-flex flex-column justify-content-around align-items-center" action="index.php" method="GET" name="pswLength">
                    <input type="number" name="pswLen" id="pswLen">
                    <button type="submit" class="btn btn-primary">INVIA</button>
                </form>
            </div>
            <div class="right-section d-flex justify-content-center align-items-center text-white w-75">
                <h2><?php echo $newPSW ?></h2>
            </div>
        </div>

    </body>
</html>