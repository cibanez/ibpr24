<?php	 

if(!isset($_SESSION['login']))
{
echo'<form method="post" action="connexion.php"><p class="style2">Bonjour, identifiez-vous :<input type="text" name="login" value="login" size="10px"/> <input type="password" name ="mdp" value="Mot de passe" size="10px" /> <input name="Validation" type="submit" value="OK" /></p></form>';
if(isset($_SESSION['connexion'])){
echo "blaireau";
}
}

else
{
echo'<form method="post" action="deco.php"><p class="style3"> Bonjour '.$_SESSION['login'].' <input name="deco" type="submit" value="Deco"/></p></form>';


}
?>