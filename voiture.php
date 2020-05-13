<?php

/**
 * class voiture
 * Permet de un gérer parc de voitures
 */

class Voiture{

    /**
     * @var string $matriculation (immatriculation)
     */
    private $matriculation;

    /**
     * @var string (or date) $date_circulation
     */
    private $date_circulation;

    /**
     * @var string $model
     */
    private $model;

    /**
     * @var string $brand (marque)
     */
    private $brand;

    /**
     * @var integer $kilometers (kilométrage)
     */
    public $kilometers;

    /**
     * @var string $color
     */
    public $color;

    /**
     * @var float $weight
     */
    public $weight;


    /**
     * Constructeur
     * @param string $brand, $matriculation, $date_circulation
     * @param integer $kilometers
     * @param float $date_circulation
     * @return string $reservation, $use, $pays, $state
     */
    public function __construct($brand, $model, $weight, $matriculation, $kilometers, $date_circulation){
        $this->brand = $brand;
        $this->model = $model;
        $this->weight = $weight;
        $this->matriculation = $matriculation;
        $this->kilometers = $kilometers;
        $this->date_circulation = $date_circulation;

        printf(reservation($brand), using($weight), immatriculation($matriculation), state($kilometers), yearsCirculation($date_circulation));
        
    }

    /**
     * @param string $brand
     * @return string $reservation
     */
    private function reservation($brand){
        if ($brand === "Audi"){
            return $reservation = "Reserved";
        } else {
            return $reservation = "Free";
        }
    }

    /**
     * @param float $weight
     * @return string $use
     */
    private function using($weight){
        if ($weight > 3.5){
            return $use = "Utilitaire";
        } else {
            return $use = "Commerciale";
        }
    }

    /**
     * @param string $matriculation
     * @return string $pays
     */
    private function immatriculation($matriculation){
        $country = substr($matriculation, 0, 2);
        switch ($country) {
            case 'BE':
                return $pays = "Belgique";
                break;
            case 'FR':
                return $pays = "France";
                break;
            case 'DE':
                return $pays = "Allemagne";
                break;
        }
    }

    /**
     * @param integer $kilometers
     * @return string $state
     */
    public function state($kilometers){
        if ($kilometers < 100000){
            return $state = "low";
        } elseif ($kilometers >= 100000 && $kilometers < 200000){
            return $state = "middle";
        } elseif ($kilometers >= 200000) {
            return $state = "high";
        }
    }

    /**
     * @param string $date_circulation
     * @return string $interval
     */
    public function yearsCirculation($date_circulation){
        $date_courante = date("Y-m-d");
        $date_circulation = new DateTime($date_circulation);
        $interval = $date_courante->date_diff($date_circulation);
        return $interval->format("%R%Y year(s)");
    }

    /**
     * @param integer $kilometers
     * @return string $kilometers
     */
    public function rouler($kilometers){
        $kilometers += 100000;
        echo $kilometers;
        return state($kilometers);
    }

    /**
     * @return array retourne un tableau html avec les caractéristiques des voitures instanciées
     */
    public function display(){
        
    }

}

?>