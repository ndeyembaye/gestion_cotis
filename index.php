<?php
	if (isset($_GET['page'])){
		require_once 'view/menu.php';
		switch ($_GET['page']) {
			case 'listeCotis':
				require_once 'model/cotisation.php';
				$liste=listCotisation();
			   require_once 'view/ListeCotisations.php';
			   break;
			case 'modifPaiement':
				if(isset($_GET['numCotis'])){
				 require_once 'model/db.php';
				 require_once 'model/cotisation.php';
				 $tab = getCotisationByNum($_GET['numCotis']);
				 $ligne = mysqli_fetch_row($tab);
			     require_once 'view/ModifierPaiement.php';
				} 
			break;
			case 'RecherchePaiement':
				require_once 'model/cotisation.php';
				$liste=listCotisation();
				require_once 'view/RechercheCotisation.php';
				break;
			case 'addCotis':
				require_once 'view/SaisieCotisation.php';
				break;
			case 'addMembre':
				require_once 'view/SaisieMembre.php';
				break;
			case 'suppCotis':
				require_once 'view/SupprimerCotisation.php';
				break;
			case 'listMembre':
				require_once 'model/membre.php';
				$liste=listMembre();
			   require_once 'view/ListeMembre.php';
			   break;
			   case 'lesdetail':
				require_once 'model/cotisation.php';
				$liste=detail($_GET['mat']);
			   require_once 'view/detail.php';
			   break;
			   
			   
			   
								
		}

	}
	else{
		require_once 'view/menu.php';
	}
?>