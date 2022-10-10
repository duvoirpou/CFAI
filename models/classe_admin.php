<?php 
	class admin
	{
		private $id;
		private $nom;
		private $prenom;
		private $login;
		private $password;
		private $etat;
		

		public function __construct($id,$nom,$prenom,$login,$password,$etat)
					{
						$this->id 		= $id;
						$this->nom 		= $nom;
						$this->prenom 		= $prenom;
						$this->login 		= $login;
						$this->password 		= $password;
						$this->etat 		= $etat;
						
						
					}

		/*LISTE DES GETTERS*/
		
		public function getId()
		{
			return $this->id;
		}

		public function getNom()
		{
			return $this->nom;
		}
		
		public function getPrenom()
		{
			return $this->prenom;
		}
		
		public function getLogin()
		{
			return $this->login;
		}

		public function getPassword()
		{
			return $this->password;
		}

		public function getEtat()
		{
			return $this->etat;
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

		
		public function afficheUsers(){
            $bdd = connexionBdd();
            
            $requete = $bdd->prepare("SELECT * FROM `users` ORDER BY `id` DESC");
            $requete->execute();

            return $requete;
        }


		public function ajout(){
			
			$bdd = connexionBdd();
			//requête pour éviter la redendance des pseudo
			$request = $bdd->prepare("SELECT * FROM `users` WHERE prenom=:prenom");
			$result = $request->execute(array(
												':prenom'=>$this->prenom
											));
											
			$result=$request->fetchobject();
			
			

			//vérification pour s'avoir si l'objet existe
			if(!is_object($result)){

				 $request = $bdd->prepare("INSERT INTO `users`(`id`,`nom`, `prenom`, `login`, `password`, `etat`, `online`) VALUES (:id,:nom,:prenom,:login,:password,:etat,:online)");

				$reponse = $request->execute(array(
													'id'	 => NULL,			
													'nom' => $this->nom,
													'prenom' => $this->prenom,
													'login' => $this->login,
													'password' => $this->password,
													'etat' => $this->etat,
													'online' => $this->online
												)); //var_dump($reponse); die();
			return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				 }
		}
		

		/*METHODE QUI PERMET DE SE CONNECTER AU SITE*/

			public function connexionSiteAdmin($login,$password){

				$bdd = connexionBdd();

				$request = $bdd->prepare("SELECT * FROM admin WHERE login=? AND password=?");

				$request->execute(array($_POST['login'],$_POST['password']));

				$reponse = $request->fetchObject();

				return $reponse;

				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
				unset($bdd);
		}

		

		
		public function ModifierUsers(){
			
			$bdd = connexionBdd();
			$request=$bdd->prepare("UPDATE `users` SET `nom`=?,`prenom`=?,`login`=?,`password`=?,`etat`=?,`online`=? WHERE `id`=?");
			
					
					$nom	= $this->nom;
					$prenom	= $this->prenom;
					$login	= $this->login;
					$password	= $this->password;
					$etat		= $this->etat;
					$online		= $this->online;
					$id		= $this->id;
					
			$params=array($nom,$prenom,$login,$password,$etat,$online,$id);
			
			$request->execute($params);
	
	//var_dump($request); die();
	return $request;
}





//RECUPERER UN MEMBRE PAR L'ID   
public function getIdRecup($code){
	$bdd =  connexionBdd();
	$request=$bdd->prepare("SELECT * FROM `users` WHERE id=?");
	$params=array($code);
	$request->execute($params);
	$recup=$request->fetch();

	return $recup; 
}
		
		
		
		
//======================================================================	
	}
	
?>