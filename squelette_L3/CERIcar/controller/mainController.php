<?php

class mainController
{

	public static function helloWorld($request, $context)
	{
		$context->mavariable = "hello world";
		return context::SUCCESS;
	}



	public static function index($request, $context)
	{

		return context::SUCCESS;
	}



	public static function superTest($request, $context)
	{

		$context->par1 = $request['par1'];
		$context->par2 = $request['par2'];

		if (($context->par1 != null) and ($context->par2 != null)) {

			return context::SUCCESS;
		} else {

			$context->error = 'il vous manque un paramétre dans l url ';
			return context::ERROR;
		}
	}
	/* méthode  pour tester les utilisateurs 

	public static function testUtilisateur($request, $context)
	{
		$context->util = utilisateurTable::getUserByLoginAndPass('User2', '0bc8658ea4e2f64af9d6890eace91a819f9f2046');
		if ($context->util != null) {
			return context::SUCCESS;
		} else {
			return context::ERROR;
		}
	}*/

	/* méthode teste utilisateur on passant des paramétres dans url  */

	/*public static function testUtilisateur($request, $context)
	{
		$context->util = utilisateurTable::getUserByLoginAndPass($request['identifiant'], $request['pass']);
		if ($context->util != null) {
			return context::SUCCESS;
		} else {
			return context::ERROR;
		}
	}*/

	public static function testUtilisateur($request, $context)
	{
		$context->util = utilisateurTable::getUserById(1);
		return context::SUCCESS;
	}


	/*méthode pour tester les trajet*/
	public static function testTrajet($request, $context)
	{
		/* on peut aussi passer paramétre dans l url */
		/*$context->trajet1 = trajetTable::getTrajet($request['Brest'], $request['Amiens']);*/
		$context->trajet1 = trajetTable::getTrajet('Brest', 'Amiens');
		if ($context->trajet1 != null) {
			return context::SUCCESS;
		} else {
			return context::ERROR;
		}
	}


	/*methode pour tester les voyages*/
	public static function testVoyage($request, $context)
	{
		$context->voyages = voyageTable::getVoyagesByTrajet(3);


		return context::SUCCESS;
	}


	/*methode pour tester les voyages*/
	public static function testreservation($request, $context)
	{
		$context->reservations = reservationTable::getReservationByVoyage(759);


		return context::SUCCESS;
	}
}
