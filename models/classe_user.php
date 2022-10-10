<?php 
	class user
	{
		private $id_user;
		private $nom_user;
		private $prenom_user;
		private $sexe;
		private $tel;
		private $pseudo;
		private $mpass;
		private $permis;

		public function __construct($id_user,$nom_user,$prenom_user,$sexe,$tel,$pseudo,$mpass,$permis)
					{
						$this->id_user 		= $id_user;
						$this->nom_user 		= $nom_user;
						$this->prenom_user 		= $prenom_user;
						$this->sexe 		= $sexe;
						$this->tel 		= $tel;
						$this->pseudo 		= $pseudo;
						$this->mpass		= $mpass;
						$this->permis		= $permis;
						
					}

		/*LISTE DES GETTERS*/
		
		public function getId_user()
		{
			return $this->id_user;
		}
		
		public function getNom_user()
		{
			return $this->nom_user;
		}
		
		
		public function getPrenom_user()
		{
			return $this->prenom_user;
		}
		
		public function getSexe()
		{
			return $this->sexe;
		}

		
		public function getTel()
		{
			return $this->tel;
		}
		
		public function getPseudo()
		{
			return $this->pseudo;
		}

		public function getMpass()
		{
			return $this->mpass;
		}
		

		public function getPermis()
		{
			return $this->permis;
		}
		
		

		/*LISTE DES SETTERS*/
		
		public function setId_user($id_user)
		{
			$this->id_user = $id_user;
		}
		
		public function setNom_user($nom_user)
		{
			$this->nom_user = $nom_user;
		}
		
		public function setPrenom_user($prenom_user)
		{
			$this->prenom_user = $prenom_user;
		}
		
		public function setSexe($sexe)
		{
			$this->sexe = $sexe;
		}
		
		
		public function setTel($tel)
		{
			$this->tel = $tel;
		}
		
		
		public function setPseudo($pseudo)
		{
			$this->pseudo = $pseudo;
		}

				
		
		public function setMpass($mpass)
		{
			$this->mpass = $mpass;
		}
		
		
	
		
		public function setPermis($permis)
		{
			$this->permis = $permis;
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

		

		

		/*METHODE QUI PERMET DE SE CONNECTER AU SITE*/

			public function connexionSiteUser($login,$mdp){

				$bdd = connexionBdd();

				$request = $bdd->prepare("SELECT * FROM user WHERE pseudo=? AND mpass=? AND permis=1");

				$request->execute(array($_POST['login'],$_POST['mdp']));

				$reponse = $request->fetchObject();

				return $reponse;

				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
				unset($bdd);
		}

		

		
		/*METHODE QUI PERMET D'AJOUTER UN user*/
		public function ajoutClient(){
			
			$bdd = connexionBdd();
			//requête pour éviter la redendance des pseudo
			$request = $bdd->prepare("SELECT * FROM `user` WHERE pseudo=:pseudo");
			$result = $request->execute(array(
												':pseudo'=>$this->pseudo
											));
											
			$result=$request->fetchobject();
			
			

			//vérification pour s'avoir si l'objet existe
			if(!is_object($result)){

				 $request = $bdd->prepare("INSERT INTO `user`(`id_user`, `nom_user`, `prenom_user`, `sexe`, `tel`, `pseudo`, `mpass`, `photo`, `permis`) VALUES (:id_user,:nom_user,:prenom_user,:sexe,:tel,:pseudo,:mpass,:photo,:permis)");

				$reponse = $request->execute(array(
													'id_user'	 => NULL,			
													'nom_user' => $this->nom_user,
													'prenom_user' => $this->prenom_user,
													'sexe' => $this->sexe,
													'tel' => $this->tel,
													'pseudo' => $this->pseudo,
													'mpass' => $this->mpass,
													'photo' => $this->photo,
													'permis' => $this->permis
													
												)); //var_dump($reponse); die();
			return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				 }
		}


//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierMembre(){
			if($this->photo==""){
					$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `user` SET `nom_user`=?,`prenom_user`=?,`sexe`=?,`tel`=?,`pseudo`=?,`mpass`=?,`permis`=? WHERE `id_user`=?");
					
							
							$nom_user	= $this->nom_user;
							$prenom_user	= $this->prenom_user;
							$sexe	= $this->sexe;
							$tel	= $this->tel;
							$pseudo		= $this->pseudo;
							$mpass		= $this->mpass;
							
							$permis		= $this->permis;
							$id_user		= $this->id_user;
					
					$params=array($nom_user,$prenom_user,$sexe,$tel,$pseudo,$mpass,$permis,$id_user);
					
					$request->execute($params);
			}else{
				$bdd = connexionBdd();
				//tmp_name est un dossier temporaire
				$photos=$_FILES['photo']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//impseudos nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($photo, 'images/'.$photos);
				
				$request=$bdd->prepare("UPDATE `user` SET `nom_user`=?,`prenom_user`=?,`sexe`=?,`tel`=?,`pseudo`=?,`mpass`=?,`photo`=?,`permis`=? WHERE `id_user`=?");
					
							
							$nom_user	= $this->nom_user;
							$prenom_user	= $this->prenom_user;
							$sexe	= $this->sexe;
							$tel	= $this->tel;
							$pseudo		= $this->pseudo;
							$mpass		= $this->mpass;
							$photo		= $this->photo;
							$permis		= $this->permis;
							$id_user		= $this->id_user;
							
							
					
					$params=array($nom_user,$prenom_user,$sexe,$tel,$pseudo,$mpass,$photo,$permis,$id_user);
					
					$request->execute($params);
				
				
			}
			return $request;
		}

		
		
		
		//RECUPERER UN MEMBRE PAR L'ID          SELECT * FROM `user` INNER JOIN commentaires ON user.`id_user`=commentaires.`id_user` WHERE id_commentaire=14
		public function getIdUser($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `user` WHERE id_user=?");
			$params=array($code);
			$request->execute($params);
			$user=$request->fetch();

			return $user; 
		}
//======================================================================	
	}
	
?>