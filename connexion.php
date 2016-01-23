<?php session_start() ?> 

<?php 
include("open_bdd.php");
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
	echo '<script language="Javascript"> document.location.replace("upload.php"); </script>';
}
if(isset($_SESSION['login'])){
	unset($_SESSION['connexion']);
}
else{
	$_SESSION['connexion']=true;
}
echo '<script language="Javascript"> document.location.replace("index.php"); </script>';

include("close_bdd.php");
?>
