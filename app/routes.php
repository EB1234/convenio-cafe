<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/connexion', 'Connexion#connexion', 'connexion'],
		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],

		['GET', '/profil', 'Membre#profil', 'profil'],
		['GET', '/sujet', 'Sujet#sujet', 'sujet'],

		['GET|POST','/modifier','Membre#modifier','membre_modifier'],
		['GET|POST','/supprimer','Membre#supprimer','membre_supprimer'],

		['GET','/CGU','CGU#cgu','cgu'],
		['GET','/plan','Plan#plan','plan'],
	);