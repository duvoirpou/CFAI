<?php 
	
		/*Connexion à la base de Données*/
		function connexionBdd()
		{			
			try{
				$bdd = new PDO('mysql:host=127.0.0.1;dbname=c18userbdd;charset=utf8', 'c18bdd', 'cfai@2022');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		}

		// $bdd = new PDO('mysql:host=185.98.131.149;dbname=cfaic1597406;charset=utf8', 'cfaic1597406', 'ymmb2sc6yg');

		try{
			$dbh = new PDO('mysql:host=127.0.0.1;dbname=c18userbdd;charset=utf8', 'c18bdd', 'cfai@2022');
	
		}catch(PDOException $e){
			print "Erreur!: " . $e->getMessage() . "<br>";
			die();
		}

		
//======================================================================	
	
	
?>