<?php 

    class Produit {

        private $idproduit;
        private $nom;
        private $image;
        private $description;
        private $quantite;
        private $prix;
        private $idboutique;
        private $idcategorie;


        public function __construct() {}

        public function getIdProd() { return $this->idproduit; }
        public function getNom() { return $this->nom; }
        public function getImage() { return $this->image; }
        public function getDescription() { return $this->description; }
        public function getQuantite() { return $this->quantite; }
        public function getPrix() { return $this->prix; }
        public function getIdBoutique() { return $this->idboutique; }
        public function getIdCategorie() { return $this->idcategorie; }

        public function setNom(string $nom) {$this->nom = $nom; }
        public function setImage(string $image) {$this->image = $image; }
        public function setDescription(string $descript) {$this->description = $descript; }
        public function setQuantite(string $quantite) {$this->quantite = $quantite; }
        public function setPrix(string $prix) {$this->prix = $prix; }
        public function setIdBoutique(string $idBoutique) {$this->idboutique = $idBoutique; }
        public function setIdCategorie(string $idCategorie) {$this->idcategorie = $idCategorie; }

        public function __toString() {

            return "Produit:: id: ".$this->idproduit."nom: ".$this->nom."image: ".$this->image."description: ".$this->description."Quantite: ".$this->quantite."Prix: ".$this->prix."idBoutique: ".$this->IdBoutique."Categorie: ".$this->categorie;
        }
    }

?>