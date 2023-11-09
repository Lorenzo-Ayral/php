<?php

class User {
    public string $prenom;
    public string $nom;

    function __construct(string $prenom, string $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    function direBonjour()
    {
        echo "Bonjour $this->prenom $this->nom\n";
    }
}

class Admin extends User {
    public bool $isAdmin = true;
    public string $email;

    function __construct(string $prenom, string $nom, string $email)
    {
        parent::__construct($prenom, $nom);
        $this->email = $email;
    }

    function direBonjour()
    {
        return parent::direBonjour() . "Bonjour $this->prenom $this->nom, vous êtes admin\n";
    }
}

$lorenzo = new User("Lorenzo", "Ayral");
$rachid = new Admin("Rachid", "Jeffali", "");

$lorenzo->direBonjour();
$rachid->direBonjour();