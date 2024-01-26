<?php

class Coin{
    private $id;
    private $name;
    private $price;
    private $last_24h;
    private $market_cap;
    private $last_7_days;


    function __construct($name,$price,$last_24h,$market_cap,$last_7_days){
            $this->name = $name;
            $this->price = $price;
            $this->last_24h = $last_24h;
            $this->market_cap = $market_cap;
            $this->last_7_days = $last_7_days;
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getPrice(){
        return $this->price;
    }
    function getLast_24h(){
        return $this->last_24h;
    }
    function getMarket_Cap(){
        return $this->market_cap;
    }
    function getLast7Days(){
        return $this->last_7_days;
    }
}

?>