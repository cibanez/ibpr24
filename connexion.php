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
echo $mysqli->host_info . "\n";

$login=$_POST['login'];
$password=$_POST['mdp'];
$i=0;
$bite="SELECT * FROM user where login='$login' and pwd='$password';";

$result = mysqli_query($connect, $bite);

while ($tab = mysqli_fetch_array($result))
{
	$login=$tab['login'];
	$i++;
}
if($i>=1){
	$_SESSION['login']=$login;
	echo '<script language="Javascript"> document.location.replace("index.php"); </script>';
}
if(isset($_SESSION['login'])){
	unset($_SESSION['connexion']);
}
else{
	$_SESSION['connexion']=true;
}
echo '<script language="Javascript"> document.location.replace("index.php"); </script>';
 $connect->close();
?>
