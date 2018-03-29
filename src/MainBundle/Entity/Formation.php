<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\FormationRepository")
 */
class Formation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Formation", type="string", length=255)
     */
    private $titreFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Planing", type="string", length=255)
     */
    private $planing;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="Duree", type="string", length=255)
     */
    private $duree;
    /**
     * @ORM\OneToOne(targetEntity="Administrateur", mappedBy="Formation")
     */
    private $Administrateur;
    /**
     *@ORM\OneToMany(targetEntity="Session_Formation", mappedBy="Formation")
     */
    private $Session_Formation;
    /**
     *@ORM\OneToOne(targetEntity="Formateur", mappedBy="Formation")
     *@ORM\JoinColumn(name="Formateur_id", referencedColumnName="id")
     */
    private $Formateur;
    /**
     *@ORM\OneToMany(targetEntity="Video_Chapitre", mappedBy="Formation")
     */
    private $Video_Chapitre;
    /**
     *@ORM\OneToMany(targetEntity="Chapitre_Formation", mappedBy="Formation")
     */
    private $Chapitre_Formation;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreFormation
     *
     * @param string $titreFormation
     *
     * @return Formation
     */
    public function setTitreFormation($titreFormation)
    {
        $this->titreFormation = $titreFormation;

        return $this;
    }

    /**
     * Get titreFormation
     *
     * @return string
     */
    public function getTitreFormation()
    {
        return $this->titreFormation;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Formation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set planing
     *
     * @param string $planing
     *
     * @return Formation
     */
    public function setPlaning($planing)
    {
        $this->planing = $planing;

        return $this;
    }

    /**
     * Get planing
     *
     * @return string
     */
    public function getPlaning()
    {
        return $this->planing;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Formation
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Formation
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $Administrateur
     */
    public function setAdministrateur($Administrateur)
    {
        $this->Administrateur = $Administrateur;
    }

    /**
     * @return mixed
     */
    public function getAdministrateur()
    {
        return $this->Administrateur;
    }

    /**
     * @return mixed
     */
    public function getSessionFormation()
    {
        return $this->Session_Formation;
    }

    /**
     * @param mixed $Session_Formation
     */
    public function setSessionFormation($Session_Formation)
    {
        $this->Session_Formation = $Session_Formation;
    }

    /**
     * @return mixed
     */
    public function getFormateur()
    {
        return $this->Formateur;
    }

    /**
     * @param mixed $Formateur
     */
    public function setFormateur($Formateur)
    {
        $this->Formateur = $Formateur;
    }

    /**
     * @param mixed $Video_Chapitre
     */
    public function setVideoChapitre($Video_Chapitre)
    {
        $this->Video_Chapitre = $Video_Chapitre;
    }

    /**
     * @return mixed
     */
    public function getVideoChapitre()
    {
        return $this->Video_Chapitre;
    }

    /**
     * @return mixed
     */
    public function getChapitreFormation()
    {
        return $this->Chapitre_Formation;
    }

    /**
     * @param mixed $Chapitre_Formation
     */
    public function setChapitreFormation($Chapitre_Formation)
    {
        $this->Chapitre_Formation = $Chapitre_Formation;
    }
}

