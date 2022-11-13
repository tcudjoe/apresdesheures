<?php
    function titleName() {
        if (isset($_GET["content"])) {
        print($_GET["content"]);
        } else {
        print("home");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="icon" href="./img/favicon/favicon.ico">
    <link rel="manifest" href="./img/favicon/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>ADH || <?php titleName(); ?></title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?content=home">
                    <img src="./img/logo/pngStickerBlackText.png" alt="apres des heures logo">
                </a>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content=about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects-section">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-section">Contact</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- <script type="text/javascript" language="JavaScript">
        function set_body_height() { // set body height = window height
            $('body').height($(window).height());
        }
        $(document).ready(function () {
            $(window).bind('resize', set_body_height);
            set_body_height();
        });
    </script> -->
</body>

</html>