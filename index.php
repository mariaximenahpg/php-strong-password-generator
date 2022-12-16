<?php
require_once './functions.php';
if(!empty($_GET['passwordLength'])){
    session_start();
    $_SESSION['passwordLength'] = passwordGenerated($length);
    header('Location: ./password.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>php-strong-password-generator</title>
</head>
<body>
    <div class="container py-4 w-50 m-auto text-center">
        <h3 class="pb-4 fs-5">Password Generator</h3>
        <form action="./index.php" method="GET">
        <div class="psw-input">
            <label for="input">Quanti caratteri deve contenere la tua password?</label>
            <div class="py-2">
            <input type="number" name="passwordLength" class="w-25 m-auto">
            </div>
            <div class="py-2">
            <button type="submit">Genera la tua nuova password</button>
            </div>
        </div>
        </form>
    </div>
    
</body>
</html>