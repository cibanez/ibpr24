<?php session_start() ?> 

<?php 

include('open_bdd.php');

$name=$_FILES['video']['name'];
$login=$_SESSION['login'];
$path="/media/";
$date = date("Y-m-d");

if(isset($_FILES['video'])) { 
     $dossier = 'media/';
     
     $fichier = basename($_FILES['video']['name']);
     
     if(move_uploaded_file($_FILES['video']['tmp_name'], $dossier . $fichier)){

$insert="INSERT INTO video(name,path,login,date) VALUES ('$name','$path','$login','$date');";
     
$result = mysqli_query($connect, $insert);
		Echo "Media bien enregistré !! Good Job minou";
	}
	else{
		
	}
 }
else {
	
}
																	
?>