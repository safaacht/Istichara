<?php
declare(strict_types=1);

namespace models;

enum Specialisation:string 
{
    case DroitPenal="droit_penal";
    case Civile="civile";
    case Famille="famille";
    case Affaires="affaires";
}
class Avocat extends Personne{
    public function __construct(string $name,
                                string $email, 
                                string $phone, 
                                private int $expYears,
                                private float $hourlyRate,
                                private Specialisation $specialisation,
                                private bool $consultationOnline,  
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

    public function setSpecialisation(Specialisation $specialisation): void
    {
        $this->specialisation = $specialisation;
    }

    public function setConsultationOnline(bool $consultationOnline): void
    {
        $this->consultationOnline = $consultationOnline;
    }

    public function getExpYears(): int {
        return $this->expYears;
    }

    public function getHourlyRate(): float {
        return $this->hourlyRate;
    }

    public function getSpecialisation(): Specialisation {
        return $this->specialisation;
    }

    public function isConsultationOnline(): bool {
        return $this->consultationOnline;
    }

}