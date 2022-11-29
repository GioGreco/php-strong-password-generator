<?php
session_start();
include __DIR__.'/functions/functions.php';
$newPSW = generatePSW($_SESSION['pswLength']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSW - created</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="vh-100 bg-black d-flex flex-column justify-content-center align-items-center">
        <span class="fs-2 text-white mb-2 text-uppercase text-center">La tua nuova password:</span>
        <h1 class="text-white"><?php echo $newPSW; ?></h1>
    </div>
</body>
</html>