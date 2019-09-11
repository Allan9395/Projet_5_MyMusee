<?php

namespace App\Entity;

class MuseumSearch 
{
    private $region;

    private $departement;

    private $ville;



    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null  $region
     * @return MuseumSearch
     */
    public function setRegion(?string $region): MuseumSearch
    {
        $this->region = $region;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    /**
     * @param string|null  $departement
     * @return MuseumSearch
     */
    public function setDepartement(?string $departement): MuseumSearch
    {
        $this->departement = $departement;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * @param string|null  $ville
     * @return MuseumSearch
     */
    public function setVille(?string $ville): MuseumSearch
    {
        $this->ville = $ville;

        return $this;
    }
    
}