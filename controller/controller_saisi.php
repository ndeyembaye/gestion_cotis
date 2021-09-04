<?php
require_once '../model/cotisation.php';
 require_once '../model/membre.php';
if(isset($_POST['btn_Ajouter_membre']) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['adresse']) and !empty($_POST['tel'])){
 $nom =$_POST['nom'];
 $prenom= $_POST['prenom'];
 $adresse= $_POST['adresse'];
 $tel= $_POST['tel'];
 addMembre($nom,$prenom, $adresse,$tel);
 header("location:http://localhost/ACS/mini_Projet/?page=listMembre");
}else {
    header("location:http://localhost/ACS/mini_Projet/?page=addMembre&non_ok_saisi");
}
// Suppression
if(isset($_GET['matsup'])){
    deleteMembre($_GET['matsup']);
    header("location:http://localhost/ACS/mini_Projet/?page=listMembre");
   }
   if (isset($_GET['matDetail'])) {
      if (detail($_GET['matDetail'])) {
        header("location:http://localhost/ACS/mini_Projet/?page=lesdetail&mat=$_GET[matDetail]");
      }else {
          echo "il n a pas fait de cotisation";
      }
   }
?>