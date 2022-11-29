<?php
session_start();

    include __DIR__.'/functions/functions.php';
    if(isset($_SESSION) && isset($_GET['pswLen'])){
        $_SESSION['pswLength'] = $_GET['pswLen'];
        header('Location: ./success.php');
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
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        
        <div class="vh-100 bg-black d-flex justify-content-center align-items-center">
                <form class="d-flex flex-column justify-content-around align-items-center" action="index.php" method="GET" name="pswLength">
                    <span class="fs-2 text-white mb-2 text-uppercase">Quanto vuoi che sia lunga la tua password?</span>
                    <input type="number" name="pswLen" id="pswLen" class="pswInput mb-4">
                    <button type="submit" class="btn btn-primary">INVIA</button>
                </form>
        </div>

    </body>
</html>