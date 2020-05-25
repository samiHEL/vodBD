
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Films en VOD</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/vod.css" type="text/css" />
	</head>
	<body>
		<h1>SI6-Fichiers Text - Films en VOD</h1>
		<hr />
		
		  <div id="menu">
			<ul>
			  <li class="menu-style"><a href="vod.html" >Acceuil</a></li>
			  <li class="menu-style"><a href="consulterFilms.php">Consulter la liste des films</a></li>
			  <li class="menu-style"><a href="rechercherFilm.php">Rechercher un film</a></li>
			  <li class="menu-style"><a href="ajouterFilm.php">Ajouter un film</a></li>
			  <li class="menu-style"><a href="supprimerFilm.php">Supprimer un film</a></li>
			</ul>
		  </div>
		  <h1>Liste des films</h1><br/>
		  <?php 
			$bd  = new PDO( 'pgsql:host=localhost;dbname=vod', 'etudiant' , '' ) ;
			try {    $bd = new PDO( 'pgsql:host=localhost;dbname=vod', 'etudiant' , '' ) ; 
			} 
			catch ( PDOException $e ) {
				   die( 'Erreur : ' . $e->getMessage() ) ; 
			}
			$sql = 'select * from Film' ;
			$resultat = $bd->query( $sql ) ;
			$lignes = $st->fetchAll( PDO::FETCH_ASSOC ) ;
			for( $lignes as $uneLigne ){   
				 echo $uneLigne[ 'annee' ] ;  
			}
			?>
		 
	</body>
</html>
