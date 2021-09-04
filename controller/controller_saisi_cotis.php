<?php
 require_once '../model/cotisation.php';
 require_once '../model/membre.php';
if(isset($_POST['btn_Ajouter_cotisation'])){
    if(!empty($_POST['datecotis']) and !empty($_POST['mois']) and !empty($_POST['motif']) and !empty($_POST['montant']) and !empty($_POST['matricule'])){
        $datecotis =$_POST['datecotis'];
        $mois= $_POST['mois'];
        $motif= $_POST['motif'];
        $montant= $_POST['montant'];
        $matricule=$_POST['matricule'];
         $resp=rechercheMembre($matricule);
         $nbrLign=mysqli_num_rows($resp);
        if($nbrLign>0){
            addCotisation($datecotis,$mois, $motif,$montant,$matricule);
            header("location:http://localhost/ACS/mini_Projet/?page=addCotis&ok");
        }else {
            header("location:http://localhost/ACS/mini_Projet/?page=addCotis&non_existe_mat");
        }
      
    } else {
        header("location:http://localhost/ACS/mini_Projet/?page=addCotis&non_ok_saisi");
    }
}
// Suppression
   if(isset($_GET['numCotis'])){
    deleteCotisation($_GET['numCotis']);
    header("location:http://localhost/ACS/mini_Projet/?page=listeCotis");
   }
    // Modification    
   if(isset($_POST['btn_modif_cotisation'])){
    $numCotis = $_POST['numCotis'];
    $datecotis = $_POST['datecotis'];
    $mois = $_POST['mois'];
    $motif = $_POST['motif'];
    $montant = $_POST['montant'];
    $matricule = $_POST['matricule'];
    $resp=rechercheMembre($matricule);
    $nbrLign=mysqli_num_rows($resp);
   if($nbrLign>0){
        updateCotisation($numCotis, $datecotis, $mois,$motif,$montant,$matricule);
        header("location:http://localhost/ACS/mini_Projet/?page=listeCotis");
   }else {
        header("location:http://localhost/ACS/mini_Projet/?page=listeCotis&non_existe_mat");
   }
   }

?>