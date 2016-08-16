<?php 
namespace Model;

class SujetModel extends \W\Model\Model {
	public function getMembre($idMembreARecuperer){

		//// Récupère une ligne de la table en fonction de l'identifiant id_membre
		$Membre = $this -> find($idMembreARecuperer);
		
			//creation de l'objet $ObjetMembre qui va récuperer les données de la base de données 
		$ObjetMembre = new Membre(
			$Membre['nom'],
			$Membre['prenom'],
			$Membre['pseudo'],
			$Membre['mail'],
			$Membre['nationalite'],
			$Membre['age_public'],
			$Membre['genre'],
			$Membre['photo']
			);

		return $ObjetMembre;

		}
}