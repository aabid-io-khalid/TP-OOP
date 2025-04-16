<?php


require_once './Agence.php';
require_once './Voiture.php';
require_once './Moto.php';
require_once './Camion.php';
require_once './Client.php';
require_once './Reservation.php';
require_once './LoggerTrait.php';

$agenceParis = new Agence("chama3ia", "Chama3ia");
$agenceCasablanca = new Agence("wara9 chajar", "Casawara9 chajarblanca");

$voiture = new Voiture();
$voiture->prixJour = 89;
$voiture->disponible = true;

$moto = new Moto();
$moto->prixJour = 72;
$moto->disponible = true;

$camion = new Camion();
$camion->prixJour = 100;
$camion->disponible = false;

$agenceParis->ajouterVehicule($voiture);
$agenceParis->ajouterVehicule($moto);
$agenceCasablanca->ajouterVehicule($camion);

$client1 = new Client();
$client1->nom = "chisamia";
$client1->prenom = "chikania";
$client1->email = "samia.kania@mail.com";

$agenceParis->enregistrerClient($client1);

$dateReservation = new DateTime();
$reservation = $agenceParis->faireReservation($client1, $voiture, $dateReservation, 5);

echo "Price is : " . $reservation->calculerMontant() . " darham\n";




