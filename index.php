<?php
    include "./classes/functions.php";
    $objFun = new Functions();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"></head>
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="icon" href="./img/favicon/favicon.ico">
    <link rel="manifest" href="./img/favicon/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>ADH || <?php $objFun->titleName(); ?></title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?content=home">
                    <img src="./img/logo/pngStickerBlackText.png" alt="apres des heures logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav menu me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?content=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content=about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content=shop">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content=contact">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav loginCart nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content=login">
                                <i class="bi bi-person-circle">login</i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content=cart">
                                <i class="bi bi-bag">cart</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php include 'content.php';?>
    </main>

    <footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</body>

</html>