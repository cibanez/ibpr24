<?php session_start() ?> 

<?php 

include('open_bdd.php');

$name=$_FILES['video']['name'];
$login=$_SESSION['login'];
$path="media/";
$date = date("Y-m-d");
echo 'bite'. $_FILES['video'];	
if(isset($_FILES['video'])) { 
     $dossier = 'media/';
     $fichier = basename($_FILES['video']['name']);
     echo 'we are here : '.$dossier.$fichier;
     if(move_uploaded_file($_FILES['video']['tmp_name'], $dossier . $fichier)){
		$insert="INSERT INTO video(name,path,login,date) VALUES ('$name','$path','$login','$date');";
		$result = mysqli_query($connect, $insert);
		$_SESSION['video'] = false;
		echo '<script language="Javascript"> document.location.replace("montage_access.php"); </script>';
	}
	else {
 		$_SESSION['video'] = true;
 		echo '<script language="Javascript"> document.location.replace("upload.php"); </script>';
 	}	
 }

 include('close_bdd.php');
																
?>