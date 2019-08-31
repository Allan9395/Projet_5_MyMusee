<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MuseumsRepository")
 */
class Museums
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Artiste;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Atout;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Categorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Code_Postal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Domaine_thematique;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Departement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Histoire;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Interet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Lieu;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Nom_Officiel;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Nom_Usage;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Personnage_Phare;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Protection_batiment;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Protection_Espace;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Region;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Themes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $URL;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $geolocalisation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(?string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getArtiste(): ?string
    {
        return $this->Artiste;
    }

    public function setArtiste(?string $Artiste): self
    {
        $this->Artiste = $Artiste;

        return $this;
    }

    public function getAtout(): ?string
    {
        return $this->Atout;
    }

    public function setAtout(?string $Atout): self
    {
        $this->Atout = $Atout;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(?string $Categorie): self
    {
        $this->Categorie = $Catégorie;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->Code_Postal;
    }

    public function setCodePostal(?string $Code_Postal): self
    {
        $this->Code_Postal = $Code_Postal;

        return $this;
    }

    public function getDomaineThematique(): ?string
    {
        return $this->Domaine_thematique;
    }

    public function setDomaineThematique(?string $Domaine_thematique): self
    {
        $this->Domaine_thematique = $Domaine_thematique;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->Departement;
    }

    public function setDepartement(?string $Departement): self
    {
        $this->Departement = $Departement;

        return $this;
    }

    public function getHistoire(): ?string
    {
        return $this->Histoire;
    }

    public function setHistoire(?string $Histoire): self
    {
        $this->Histoire = $Histoire;

        return $this;
    }

    public function getInteret(): ?string
    {
        return $this->Interet;
    }

    public function setInteret(?string $Interet): self
    {
        $this->Interet = $Interet;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->Lieu;
    }

    public function setLieu(?string $Lieu): self
    {
        $this->Lieu = $Lieu;

        return $this;
    }

    public function getNomOfficiel(): ?string
    {
        return $this->Nom_Officiel;
    }

    public function setNomOfficiel(?string $Nom_Officiel): self
    {
        $this->Nom_Officiel = $Nom_Officiel;

        return $this;
    }

    public function getNomUsage(): ?string
    {
        return $this->Nom_Usage;
    }

    public function setNomUsage(?string $Nom_Usage): self
    {
        $this->Nom_Usage = $Nom_Usage;

        return $this;
    }

    public function getPersonnagePhare(): ?string
    {
        return $this->Personnage_Phare;
    }

    public function setPersonnagePhare(?string $Personnage_Phare): self
    {
        $this->Personnage_Phare = $Personnage_Phare;

        return $this;
    }

    public function getProtectionBatiment(): ?string
    {
        return $this->Protection_batiment;
    }

    public function setProtectionBatiment(?string $Protection_batiment): self
    {
        $this->Protection_batiment = $Protection_batiment;

        return $this;
    }

    public function getProtectionEspace(): ?string
    {
        return $this->Protection_Espace;
    }

    public function setProtectionEspace(?string $Protection_Espace): self
    {
        $this->Protection_Espace = $Protection_Espace;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->Region;
    }

    public function setRegion(?string $Region): self
    {
        $this->Region = $Region;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(?string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getThemes(): ?string
    {
        return $this->Themes;
    }

    public function setThemes(?string $Themes): self
    {
        $this->Themes = $Themes;

        return $this;
    }

    public function getURL(): ?string
    {
        return $this->URL;
    }

    public function setURL(?string $URL): self
    {
        $this->URL = $URL;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(?string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getGeolocalisation(): ?string
    {
        return $this->geolocalisation;
    }

    public function setGeolocalisation(?string $geolocalisation): self
    {
        $this->geolocalisation = $geolocalisation;

        return $this;
    }
}
