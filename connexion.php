<?php session_start() ?> 

<?php 


$host = "localhost"; // voir hébergeur
$user = "root"; // vide ou "root" en local
$pass = ""; // vide en local
$bdd = "tamere"; // nom de la BD

$connect = mysql_connect($host,$user,$pass);
mysql_select_db($bdd, $connect);

$login=$_POST['login'];
$password=$_POST['mdp'];
$i=0;
    	$result = mysql_query("SELECT * FROM user where login='$login' and pwd='$password';", $connect);
   		while ($tab = mysql_fetch_array($result))
    		{
    		
    		$login=$tab['login'];
			$i++;
    		}
			if($i>=1){
		$_SESSION['login']=$login;
		
		echo '<script language="Javascript">
<!--
document.location.replace("index.php");
// -->
</script>';
	}
		if(isset($_SESSION['login'])){
			unset($_SESSION['connexion']);
			}
else{
$_SESSION['connexion']=true;}
		

		echo '<script language="Javascript">
<!--
document.location.replace("index.php");
// -->
</script>';

?>
