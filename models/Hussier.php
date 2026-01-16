<?php
declare(strict_types=1);

namespace models;

enum Type:string 
{
    case Signification="signification";
    case Execution="execution";
    case Constats="constats";
}
class Hussier extends Personne{
    public function __construct(string $name,
                                string $email, 
                                string $phone, 
                                private int $expYears,
                                private float $hourlyRate,
                                private Type $type,
                                ?int $id = null)
    {
        parent::__construct($name, $email, $phone, $id);
    }

    public function setExpYears(int $exp_years):void
    {
        $this->expYears=$exp_years;
    }

    public function setHourlyRate(float $hourly_rate):void
    {
        $this->hourlyRate=$hourly_rate;
    }

    public function setType(Type $type): void
    {
        $this->type = $type;
    }


    public function getExpYears(): int {
        return $this->expYears;
    }

    public function getHourlyRate(): float {
        return $this->hourlyRate;
    }

    public function getType(): Type {
        return $this->type;
    }


}