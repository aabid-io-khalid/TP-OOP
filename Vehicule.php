<?php

abstract class Vehicule {
    protected int $id;
    protected string $immatriculation;
    protected string $marque;
    protected string $modele;
    protected float $prixJour;
    protected bool $disponible;

    public function afficherDetails(): void {
        echo "ID: {$this->id}, Marque: {$this->marque}, Model: {$this->modele}, Price: {$this->prixJour}, Disponible: " . ($this->disponible ? "True" : "False");
    }

    public function calculerPrix(int $jours): float {
        return $this->prixJour * $jours;
    }

    public function estDisponible(): bool {
        return $this->disponible;
    }

    abstract public function getType();
}