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
    <title>Montages</title>

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
    <div id="header" class="row">
        <div class="col-sm-1"><img class="logo" src="./img/logo.png"></div>  
        <div class="col-sm-7 tittle"><h1>Les Potes en Vadrouille</h1></div>
        <div class="col-sm-2 tittle"><p> Bonjour <?php echo $_SESSION['login'] ?> </p></div>
        <div class="col-sm-2 tittle"><form method="post" action="deco.php"><button name="Validation" type="submit" class="btn btn-danger">Deconnexion</button></form></div>
    </div>
</head>

<body>
    <div>
    <?php   
    if(isset($_SESSION['login'])){
        include('open_bdd.php');
        $request = "SELECT * FROM video;";

        $result = mysqli_query($connect, $request);

        while ($tab = mysqli_fetch_array($result))
        {   
            $filev = $tab['path'].$tab['name'];
            $filei = $tab['path'].$tab['name'].'.png';
            $name = $tab['name'];
            $login = $tab['login'];
            echo '<div class="container text-center">';
                echo '<div>';
                    echo '<h3>'.$name.'</h3>';
                    echo '<video src="'.$filev.'" controls poster="'.$filei.'" width="80%"></video>';
                    echo '<h6> Partagée par '.$login.'</h6>';
                echo '</div>';
            echo '</div><!--container end-->';
        }
    } else {
    ?>
 <div class="container">
  <div>
            <img src="./img/404.png">
        </div>
    </div>
      
    <?php
     } ?>
    </div>
    
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