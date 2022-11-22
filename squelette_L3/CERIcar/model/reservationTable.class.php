<?php
// Inclusion de la classe utilisateur
require_once "reservation.class.php";

class reservationTable
{

    public static function getReservationByVoyage($voyage)
    {
        $em = dbconnection::getInstance()->getEntityManager();

        $reservationRepository = $em->getRepository('reservation');
        $reservation = $reservationRepository->findBy(array('voyage' => $voyage));

        if ($voyage == false) {
            echo    'Erreur sql';
        }
        return $reservation;
    }
}
