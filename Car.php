
  <?php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats = 4;
    private string $energyType;
    private int $energyLevel;
    

    
    public function __construct(string $color, int $nbSeats , string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }
   

    public function start(): string
    {
        return "la voiture est demarre";
    }
 
    public function forward(): string
    {
        
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }


 public function dump()
    {
        var_dump($this);
    }


    


    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    
    public function setNbWheel(int $nbWheels): void
    {
        if($nbWheels >= 0) {
            $this->nbWheels = $nbWheels;
        }
    }
    


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }


    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    
    public function setNbSeats(int $nbSeats): void
    {
        if($nbSeats >= 0) {
            $this->nbSeats = $nbSeats;
        }
    }
    
   
    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function setEnergyType(string $energyType): void
    {
        $this->energyType = $energyType;
    }


    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    



}







?>