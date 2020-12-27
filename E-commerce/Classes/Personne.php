<?php 

class Personne {

        private $idPers;
        private $email;
        private $prenom;
        private $nom;
        private $sexe;
        private $age;
        private $mdp;
        private $coordX;
        private $coordY;
        private $tel;

        public function __construct() {}

        public function getIdPers() { return $this->idPers; }
        public function getEmail() { return $this->email; }
        public function getPrenom() { return $this->prenom; }
        public function getNom() { return $this->nom; }
        public function getSexe() { return $this->sexe; }
        public function getAge() { return $this->age; }
        public function getPwd() { return $this->mdp; }
        public function getCoordX() { return $this->coordX; }
        public function getCoordY() { return $this->coordY; }
        public function getTel() { return $this->tel; }

        public function setIdPers(int $idUser) { $this->idPers = $idUser; }
        public function setEmail(string $email) { $this->email = $email; }
        public function setPrenom(string $prenom) { $this->prenom = $prenom; }
        public function setNom(string $nom) { $this->nom = $nom; }
        public function setSexe(string $sexe) { $this->sexe = $sexe; }
        public function setAge(int $age) { $this->age = $age; }
        public function setPwd(string $pwd) { $this->mdp = $pwd; }
        public function setCoordX(int $coordX) { $this->coordX = $coordX; }
        public function setCoordY(int $coordY) { $this->coordY = $coordY; }
        public function setTel(int $tel) { $this->tel = $tel; }

        public function __toString() {

            return "Personne:: Id=".$this->idPers."\n Prenom: ".$this->prenom."\n Nom: ".$this->nom."\n Pwd: ".$this->mdp."\n Email: ".$this->email;
        }
    }

?>