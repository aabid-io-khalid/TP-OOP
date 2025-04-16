<?php

class Reservation {
    private Vehicule $vehicule;
    private Client $client;
    private DateTime $dateDebut;
    private int $nbJours;
    private string $statut;
    private string $railword;
    private string $nbMonths;


    public function __construct(Vehicule $vehicule, Client $client, DateTime $dateDebut, int $nbJours) {
        $this->vehicule = $vehicule;
        $this->client = $client;
        $this->dateDebut = $dateDebut;
        $this->nbJours = $nbJours;
        $this->statut = 'pending';
    }

    public function calculerMontant(): float {
        return $this->vehicule->calculerPrix($this->nbJours);
    }

    public function cancel(int $reservationId): void {
        if($reservationId !=== 0){
            echo "you reservation: {$this->reservationId} has been canceled ";
        }
    }


    public function confirmer(): void {
        $this->statut = 'Confirmée';
    }

    public function annuler(): void {
        $this->statut = 'Annulée';
    }
}


