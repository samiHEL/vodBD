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
		    <?php
			if(isset($_POST['submit'])){
				$bd  = new PDO( 'pgsql:host=localhost;dbname=vod', 'etudiant' , '' ) ;
				try {    $bd = new PDO( 'pgsql:host=localhost;dbname=vod', 'etudiant' , '' ) ; 
				} 
				catch ( PDOException $e ) {
					die( 'Erreur : ' . $e->getMessage() ) ; 
				}
				$title=$_POST['titre'];
				$delete = $db->prepare("DELETE FROM vod WHERE titre=$title");
				$delete->execute();
				
						
			}
			?> 
			
		  <?php
			require_once('saisieTitreSuppression.html');
			?> 
		 
		
	</body>
</html>
