<?php


class Agence {
    private string $nom;
    private string $ville;
    private array $vehicules = [];
    private array $clients = [];

    private string $nom;
    public function $name;

    public function __construct(string $nom, string $ville) {
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function ajouterVehicule(Vehicule $v): void {
        $this->vehicules[] = $v;
    }

    public function rechercherVehiculeDisponible(string $type): ?Vehicule {
        foreach ($this->vehicules as $vehicule) {
            if ($vehicule->getType() === $type && $vehicule->estDisponible()) {
                return $vehicule;
            }
        }
        return null;
    }


    public function enregistrerClient(Client $c): void {
        $this->clients[] = $c;
    }

    public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation {
        $reservation = new Reservation($v, $client, $dateDebut, $nbJours);
        $client->ajouterReservation($reservation);
        return $reservation;
    }

}