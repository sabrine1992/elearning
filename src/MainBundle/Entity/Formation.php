<?php

namespace MainBundle\Entity;


/**
 * Cours
 */
class Formation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $description;

    private $objectif;


    private $programme;


    private $formateur;
    private $Prix;
   private $Ssession_formation;

    /**
     * @return mixed
     */
    public function getSsessionFormation()
    {
        return $this->Ssession_formation;
    }

    /**
     * @param mixed $Ssession_formation
     */
    public function setSsessionFormation($Ssession_formation)
    {
        $this->Ssession_formation = $Ssession_formation;
    }



    public function getId()
    {
        return $this->id;
    }



    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Formation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
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
     * @return mixed
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * @param mixed $objectif
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;
    }

    /**
     * @return mixed
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * @param mixed $programme
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;
    }

    /**
     * @return mixed
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * @param mixed $formateur
     */
    public function setFormateur($formateur)
    {
        $this->formateur = $formateur;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->Prix;
    }

    /**
     * @param mixed $Prix
     */
    public function setPrix($Prix)
    {
        $this->Prix = $Prix;
    }

    /**
     * @return string
     */
    public function __toString() {
        return (string) $this->titre;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Ssession_formation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ssessionFormation
     *
     * @param \MainBundle\Entity\Session_Formation $ssessionFormation
     *
     * @return Formation
     */
    public function addSsessionFormation(\MainBundle\Entity\Session_Formation $ssessionFormation)
    {
        $this->Ssession_formation[] = $ssessionFormation;

        return $this;
    }

    /**
     * Remove ssessionFormation
     *
     * @param \MainBundle\Entity\Session_Formation $ssessionFormation
     */
    public function removeSsessionFormation(\MainBundle\Entity\Session_Formation $ssessionFormation)
    {
        $this->Ssession_formation->removeElement($ssessionFormation);
    }
}
