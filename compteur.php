<?php
    class Compteur{
        private $fp;
        private $nbr;

        public function __construct()
        {
            $this->fp = fopen("compteur/stats.txt", "r+");
            $this->nbr = fgets($this->fp);
            $this->inc();
        }

        public function inc(){
            $this->nbr++;
            fseek($this->fp, 0);
            fputs($this->fp, $this->nbr);
        }

        public function afficher(){
            return $this->nbr;
        }
    }

    $cmp = new Compteur();
    echo $cmp->afficher();