<?php

abstract class Personne {
    protected string $nom;
    protected string $prenom;
    protected string $email;

    abstract public function afficherProfil(): void;
}