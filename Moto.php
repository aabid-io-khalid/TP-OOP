<?php


class Moto extends Vehicule implements ReservableInterface {
    private int $cylindree;

    public function __construct(int $id, string $immatriculation, string $marque, string $modele, float $prixJour, bool $disponible, int $cylindree) {
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJour = $prixJour;
        $this->disponible = $disponible;
        $this->cylindree = $cylindree;
    }

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
        echo "The Client : {$this->client}, Has A Reservation For: {$this->nbJours}, starting from: {$this->dateDebut},";
    }

    public function getType(): string {
        return "Moto";
    }

    public function afficherDetails(): void {
        parent::afficherDetails();
        echo ", Cylindre: {$this->cylindree}";
    }
}