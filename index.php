<?php
session_start();

    if(isset($_SESSION) && isset($_GET['pswLen'])){
        $_SESSION['pswLength'] = $_GET['pswLen'];
        $_SESSION['filters'] = $_GET['filterChar'];
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
                <form class="d-flex flex-column justify-content-around align-items-center text-white" action="index.php" method="GET" name="pswLength">
                    <span class="fs-2 mb-2 text-uppercase">Quanto vuoi che sia lunga la tua password?</span>
                    <input type="number" name="pswLen" id="pswLen" class="pswInput mb-4">
                    <hr>
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <span class="d-block mb-2">Che tipo di caratteri vuoi includere?</span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="filterChar[]" id="numbers" checked value="numbers">
                                <label for="numbers" class="form-check-label">Numeri</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="filterChar[]" id="letters" checked value="alphabet">
                                <label for="letters" class="form-check-label">Lettere</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="filterChar[]" id="symbols" checked value="symbols">
                                <label for="symbols" class="form-check-label">Simboli</label>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat" value="noRepeat">
                            <label for="repeat" class="form-check-label">Escludi ripetizioni di caratteri</label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">INVIA</button>
                        <button type="reset" class="btn btn-danger">RESET</button>
                    </div>
                </form>
        </div>

    </body>
</html>