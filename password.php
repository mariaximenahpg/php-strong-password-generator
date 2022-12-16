<?php
session_start();
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
        <h3 class="pb-4 fs-5">La tua password è:</h3> 
        <div class="py-2">
            <p><?php echo $_SESSION['passwordLength'] ?></p>
        </div>
        <div class="py-2">
            <button><a href="./index.php" class="text-dark text-decoration-none">Genera una nuova password</a></button>
        </div>
    </div>
    
</body>
</html>