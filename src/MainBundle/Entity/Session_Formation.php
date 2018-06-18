<?php

namespace MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * Session_Formation
 */
class Session_Formation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $formation;

    private $formation_id;

    private $user_id;
    private $participe;
    private  $username;
    private  $Formateur;

    private $sessionformation_id;


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getFormationId()
    {
        return $this->formation_id;
    }

    /**
     * @param mixed $formation_id
     */
    public function setFormationId($formation_id)
    {
        $this->formation_id = $formation_id;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param mixed $formation
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
    }

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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Session_Formation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Session_Formation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Session_Formation
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
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

    /**
     * @return mixed
     */
    public function getParticipe()
    {
        return $this->participe;
    }

    /**
     * @param mixed $participe
     */
    public function setParticipe($participe)
    {
        $this->participe = $participe;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
     * @return mixed
     */
    public function getSessionformationId()
    {
        return $this->sessionformation_id;
    }

    /**
     * @param mixed $sessionformation_id
     */
    public function setSessionformationId($sessionformation_id)
    {
        $this->sessionformation_id = $sessionformation_id;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }


}
