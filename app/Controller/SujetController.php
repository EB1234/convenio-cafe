<?php

namespace Controller;

use \W\Controller\Controller;
use Model\SujetModel;


class SujetController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function sujet()
	{
		$loggedUser = $this->getUser();		
		$this->show('membre/sujet',['loggedUser'=>$loggedUser]);
	}

	// public function profil()
	// {
	// 	$this->show('membre/profil');


	// }


}