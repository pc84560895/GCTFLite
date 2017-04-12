<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Level 4</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<body>
<div class="container">
    <div class="row">
        <div class="jumbotron text-center">
            <h1>Level 4</h1>
            <?php
            if ($_SESSION["level3success"] == null) {
                ?>
                <p>The flag isn't here.</p>
                <p>Go to level 3 first!</p>
                <?php
            } else if ($_SESSION["level3success"] == true) {
                if (preg_match("/Android 10.11.12/", $_SERVER["HTTP_USER_AGENT"]) == 1 &&
                    preg_match("/Chrome\/[.0-9]* Mobile/", $_SERVER["HTTP_USER_AGENT"]) == 1
                ) {
                    $_SESSION["level4success"] = true;
                    ?>
                    <h2>You are almost at the flag!</h2>
                    <p>Move on to level 5.</p>
                    <?php
                } else {
                    ?>
                    <h2>Unsupported browser</h2>
                    <p>Sorry, we can only support phones running Android Version 10.11.12 accessing with Chrome
                        browser.</p>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="lib/jquery-3.1.1.min.js"></script>
<script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>