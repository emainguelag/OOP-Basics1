<?php

require_once 'Vehicle.php';

  class Car extends Vehicle
  {    
    private string $energy;

    private int $energyLevel;

    
    
  
public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
}


public const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
];



public function start(): string
    {
        $sentence = "";
        while ($this->currentSpeed = 0) {
        $this->currentSpeed++;
        $sentence .= "Let's go !!!";
        }
        $sentence .= "We are on our way";
        return $sentence;
      }



public function getEnergy(): string
      {
          return $this->energy;
      }



public function setEnergy(string $energy): Car
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}






public function getEnergyLevel(): int
      {
          return $this->energyLevel;
      }

public function setEnergyLevel($energyLevel) : void 
      {
          $this->energyLevel = $energyLevel;
      }


  }