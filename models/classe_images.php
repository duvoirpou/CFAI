<?php 
	class images
	{
		private $id_img;
		private $photo;
		private $libelle;
		private $date_ajout;
		private $heure_ajout;
		private $type_img;
		
		

		
		public function __construct($id_img,$photo,$libelle,$date_ajout,$heure_ajout,$type_img)
					{
						$this->id_img 	= $id_img;
						$this->libelle 	= $libelle;
						$this->photo	= $photo;
						$this->date_ajout	= $date_ajout;
						$this->heure_ajout	= $heure_ajout;
						$this->type_img	= $type_img;
						
						
					}

		/*LISTE DES GETTERS*/
		
		public function getLibelle()
		{
			return $this->libelle;
		}
		
		public function getId_img()
		{
			return $this->id_img;
		}
		
		
		public function getPhoto()
		{
			return $this->photo;
		}
		
		public function getDate_ajout()
		{
			return $this->date_ajout;
		}

		public function getHeure_ajout()
		{
			return $this->heure_ajout;
		}

		public function getType_img()
		{
			return $this->type_img;
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
        
		

        public function afficheProspectus(){
            $bdd = connexionBdd();
            
            $requete = $bdd->prepare("SELECT * FROM `images` WHERE `type_img`='Prospectus' ORDER BY `id_img` DESC LIMIT 0,1 ");
            $requete->execute();

            return $requete;
        }
		      
		
		public function afficheProspectus2(){
            $bdd = connexionBdd();
            
            $requete = $bdd->prepare("SELECT * FROM `images` WHERE `type_img`='Prospectus' ORDER BY `id_img` DESC LIMIT 1,1 ");
            $requete->execute();

            return $requete;
        }
		


		
		/*METHODE QUI PERMET D'AJOUTER*/
		public function ajoutImages(){
			
			$bdd = connexionBdd();
			

			$request = $bdd->prepare("INSERT INTO images(id_img, photo, libelle, date_ajout, heure_ajout, type_img) VALUES (:id_img, :photo, :libelle, CURRENT_DATE(), :heure_ajout, :type_img)");

				$reponse = $request->execute(array(
													'id_img' => NULL,			
													'photo' => $this->photo,
													'libelle' => $this->libelle,
													// 'date_ajout' => $this->date_ajout,
													'heure_ajout' => $this->heure_ajout,
													'type_img' => $this->type_img
													
													
													
												)); //var_dump($reponse); die();
			return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				
		}


//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierImmeubles(){
			if($this->photo==""){
					$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `immeubles` SET `id_type`=?,`description`=?,`chambre`=?,`piece`=?,`prix`=?,adresse_imm=?,`identite_proprio`=?,`adresse_proprio`=?,`tel_proprio`=?,`date_enregistrement`=?,`heure_enregistrement`=?,`statut`=?, `dispo`=?, `id_arrond`=?,`id_admin`=? WHERE `id_imm`=?");
					
							
					$id_type	= $this->id_type;
					$description	= $this->description;
					$chambre	= $this->chambre;
					$piece	= $this->piece;
					$prix	= $this->prix;
					$adresse_imm	= $this->adresse_imm;
					$identite_proprio	= $this->identite_proprio;
					$adresse_proprio	= $this->adresse_proprio;
					$tel_proprio	= $this->tel_proprio;
					$date_enregistrement	= $this->date_enregistrement;
					$heure_enregistrement	= $this->heure_enregistrement;
					$statut	= $this->statut;
					$dispo = $this->dispo;
					$id_arrond		= $this->id_arrond;
					$id_admin		= $this->id_admin;
					$id_imm		= $this->id_imm;
					
					$params=array($id_type,$description,$chambre,$piece,$prix,$adresse_imm,$identite_proprio,$adresse_proprio,$tel_proprio,$date_enregistrement,$heure_enregistrement,$statut,$dispo,$id_arrond,$id_admin,$id_imm);
					
					$request->execute($params);
			}else{
				$bdd = connexionBdd();
				//tmp_name est un dossier temporaire
				$photos=$_FILES['photo']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//impseudos nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($photo, 'images/'.$photos);
				
				$request=$bdd->prepare("UPDATE `immeubles` SET `id_type`=?,`description`=?,`chambre`=?,`piece`=?,`prix`=?,adresse_imm=?,`identite_proprio`=?,`adresse_proprio`=?,`tel_proprio`=?,`date_enregistrement`=?,`heure_enregistrement`=?,`photo`=?,`statut`=?,`dispo`=?,`id_arrond`=?,`id_admin`=? WHERE `id_imm`=?");
					
							
				$id_type	= $this->id_type;
				$description	= $this->description;
				$chambre	= $this->chambre;
				$piece	= $this->piece;
				$prix	= $this->prix;
				$adresse_imm	= $this->adresse_imm;
				$identite_proprio	= $this->identite_proprio;
				$adresse_proprio	= $this->adresse_proprio;
				$tel_proprio	= $this->tel_proprio;
				$date_enregistrement	= $this->date_enregistrement;
				$heure_enregistrement	= $this->heure_enregistrement;
				$photo		= $this->photo;
				$statut		= $this->statut;
				$dispo = $this->dispo;
				$id_arrond		= $this->id_arrond;
				$id_admin		= $this->id_admin;
					$id_imm		= $this->id_imm;
							
							
					
					$params=array($id_type,$description,$chambre,$piece,$prix,$adresse_imm,$identite_proprio,$adresse_proprio,$tel_proprio,$date_enregistrement,$heure_enregistrement,$photo,$statut,$dispo,$id_arrond,$id_admin,$id_imm);
					
					$request->execute($params);
				
				
			}
			return $request;
		}

		//METHODE QUI PERMET DE SUPPRIMER EMPLOYE
		public function supprimerImmeubles(){
			//connexion à la bdd
			
			$bdd = connexionBdd();
			$code=$_GET['code'];
			$request=$bdd->prepare("DELETE FROM photo_immeubles WHERE id=? LIMIT 1");
			
			$params=array($code);
			
			$request->execute($params);
			
			return $request;
	}
		
		
		//RECUPERER UN MEMBRE PAR L'ID          SELECT * FROM `user` INNER JOIN commentaires ON user.`id_imm`=commentaires.`id_imm` WHERE id_commentaire=14
		public function getIdPhoto($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `photo_immeubles` WHERE id=?");
			$params=array($code);
			$request->execute($params);
			$photo_imm=$request->fetch();

			return $photo_imm; 
		}
//======================================================================	
	}
	
?>