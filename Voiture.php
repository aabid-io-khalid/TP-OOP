<?php

class Voiture extends Vehicule implements ReservableInterface {
    private int $nbPortes;
    private string $transmission;

    public function __construct(int $id, string $immatriculation, string $marque, string $modele, float $prixJour, bool $disponible, int $nbPortes, string $transmission) {
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJour = $prixJour;
        $this->disponible = $disponible;
        $this->nbPortes = $nbPortes;
        $this->transmission = $transmission;
    }


    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
        echo "The Client : {$this->client}, Has A Reservation For: {$this->nbJours}, starting from: {$this->dateDebut},";
    }

    public function getType(): string {
        return "Voiture";
    }

    public function afficherDetails(): void {
        parent::afficherDetails();
        echo ", Nombre de portes: {$this->nbPortes}, Transmission: {$this->transmission}";
    }
}