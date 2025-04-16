<?php

class Client extends Personne {
    private int $numeroClient;
    private array $reservations = [];

    public function __construct(string $nom, string $prenom, string $email, int $numeroclient) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->numeroClient = 
    }

    public function ajouterReservation(Reservation $r): void {
        $this->reservations[] = $r;
    }

    public function afficherProfil(): void {
        echo "Client: {$this->nom} {$this->prenom}, Email: {$this->email}";
    }

    public function getHistorique(): array {
        return $this->reservations;
    }
}