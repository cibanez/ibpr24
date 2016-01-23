<?php session_start() ?> 

<?php 

$host = "localhost"; // voir hébergeur
$user = "root"; // vide ou "root" en local
$pass = "bite"; // vide en local
$bdd = "tamere"; // nom de la BD
$connect = new mysqli($host,$user,$pass, $bdd);
if ($connect->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $connect->connect_errno . ") " . $connect->connect_error;
}
echo $mysqli->host_info . "\n"; ?>
