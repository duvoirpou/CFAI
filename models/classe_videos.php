<?php 
	class videos
	{
		private $id_video;
		private $video;
		private $libelle;
		private $date_ajout;
		private $heure_ajout;
		private $type_video;
		
		

		
		public function __construct($id_video,$video,$libelle,$date_ajout,$heure_ajout,$type_video)
					{
						$this->id_video 	= $id_video;
						$this->video	= $video;
						$this->libelle 	= $libelle;
						$this->date_ajout	= $date_ajout;
						$this->heure_ajout	= $heure_ajout;
						$this->type_video	= $type_video;
						
						
					}

		/*LISTE DES GETTERS*/
		
		public function getLibelle()
		{
			return $this->libelle;
		}
		
		public function getId_video()
		{
			return $this->id_video;
		}
		
		
		public function getVideo()
		{
			return $this->video;
		}
		
		public function getDate_ajout()
		{
			return $this->date_ajout;
		}

		public function getHeure_ajout()
		{
			return $this->heure_ajout;
		}

		public function getType_video()
		{
			return $this->type_video;
		}


		
		
		
		
		
		
		
		
		
		/*Connexion à la base de Données*/
		/* public function connexionBdd()
		{			
			try{
				$bdd = new PDO('mysql:host=localhost;dbname=test_mvc;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMesspseudo());
			}
		} */

		
/*METHODE QUI PERMET D'AFFICHER LA LISTE DES */
        
		

        public function afficheVideo(){
            $bdd = connexionBdd();
            
            $requete = $bdd->prepare("SELECT * FROM `videos` WHERE `type_video`='Acceuil' ORDER BY `id_video` DESC LIMIT 0,2 ");
            $requete->execute();

            return $requete;
        }
		      
		
		


		
		/*METHODE QUI PERMET D'AJOUTER*/
		public function ajoutVideos(){
			
			$bdd = connexionBdd();
			

			$request = $bdd->prepare("INSERT INTO videos(id_video, video, libelle, date_ajout, heure_ajout, type_video) VALUES (:id_video, :video, :libelle, CURRENT_DATE(), :heure_ajout, :type_video)");

				$reponse = $request->execute(array(
													'id_video' => NULL,			
													'video' => $this->video,
													'libelle' => $this->libelle,
													// 'date_ajout' => $this->date_ajout,
													'heure_ajout' => $this->heure_ajout,
													'type_video' => $this->type_video
													
													
													
												)); //var_dump($reponse); die();
			return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				
		}


//======================================================================	
	}
	
?>