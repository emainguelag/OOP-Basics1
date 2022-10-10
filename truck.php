<?php

require_once 'Vehicle.php';

  class Truck extends Vehicle
  {    
    private string $energy;

    private int $energyLevel;

    private int $storage;

    private string $loading;
    
  
public function __construct(string $color, int $nbSeats, string $energy, int $storage)
{
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    $this->setStorage($storage);
}


public const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
];

public const ALLOWED_LOADING = [
    'in filling',
    'full',
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

public function setEnergy(string $energy): Truck
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}


public function getLoading(): string
      {
          return $this->loading;
      }

public function setLoading(string $loading): Truck
{
    if (in_array($loading, self::ALLOWED_LOADING)) {
        $this->loading = $loading;
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


public function getStorage(): int
      {
          return $this->storage;
      }

public function setStorage($storage) : void 
      {
          $this->storage = $storage;
      }


  }