<?php session_start() ?> 
<!DOCTYPE html>
<html lang="">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===========================
    THEME INFO
    =========================== -->
    <meta name="description" content="CVstrap is another Free minimal CV HTML theme by EvenFly built with Bootstrap 3.3.0. and released under CC-3.0 license.">
    <meta name="keywords" content="curriculum vitae, cv, one page, onepage, bootstrap, responsive, resume, timeline, free cv">
    <meta name="author" content="Mamun Srizon">

    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>Les Potes en Vadrouille</title>

    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />

    <!-- ===========================
    STYLESHEETS
    =========================== -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- ===========================
    FONTS & ICONS
    =========================== -->
    <link href='//fonts.googleapis.com/css?family=Kristi|Alegreya+Sans:300' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <!-- ===========================
        HEADER
        ============================ -->
        <div id="header" class="text-center">
            <h1>Les potes en vadrouille</h1>
            <img src="./img/logo.png">
        </div>
        <br><br>
        <div class="text-center">
            <?php    
                if(!isset($_SESSION['login']))
                {
                    if(!isset($_SESSION['connexion']))
                    {?>
                        <form method="post" action="connexion.php">
                            <p><input type="text" name="login" id="login" placeholder="Identifiant" ></p>
                            <p><input type="password" name="mdp" id="mdp" placeholder="Mot de passe" ></p>
                            <button name="Validation" type="submit" class="btn btn-primary">Let's go</button>
                        </form>
                    <?php
                    } else {?>
                        <form method="post" action="connexion.php">
                            <p><input type="text" style="border:solid #c9302c 1px" name="login" id="login" placeholder="Identifiant" ></p>
                            <p><input type="password" style="border:solid #c9302c 1px" name="mdp" id="mdp" placeholder="Mot de passe" ></p>
                            <button name="Validation" type="submit" class="btn btn-danger">Let's go</button>
                        </form>
                    <?php
                    echo "Login et/ou mot de passe incorrect.";
                    }
                }        

                else
                {?>  
                    <form method="post" action="deco.php">
                        <p class="style3"> <?php echo 'Bonjour '.$_SESSION['login'] ?>
                            <input name="deco" type="submit" value="Deco"/>
                        </p>
                    </form>
                <?php
                }
                ?>
        </div>
        <!-- <input type="file" accept="video/*;capture=camcorder"> -->
    </div><!--container end-->

    <!-- ===========================
    FOOTER
    =========================== -->
    <footer class="text-center">
        <p>Ibanez Clément & Branlat Jérémy</a></p>
        <p>IBPR24</p>
    </footer>

    <!--necessary scripts and plugins-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/evenfly.js"></script>
</body>

</html>