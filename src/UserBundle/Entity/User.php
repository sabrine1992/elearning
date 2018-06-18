<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    protected $Telephone;

    /**
     * @var \DateTime
     */
    private $DateNaissance;
    private $Prenom;
    private $Sexe;
    private $session;
    private $session_id;
    /*
     * @ORM\Column(type="string", nullable=true)
     *
     */
    private $Diplome;
    /*
         * @ORM\Column(type="string", nullable=true)
         *
         */
    private $Niveau_Etude;

    private $adresse;
    /*
     * @ORM\Column(type="string", nullable=true)
     *
     */
    private $Specialite;
    private $formation;
    private $session_formation;
    private $type;
    private $participe;

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param mixed $Telephone
     */
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }


    public function setDateNaissance($DateNaissance)
    {
        $this->DateNaissance = $DateNaissance;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param mixed $Prenom
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->Sexe;
    }

    /**
     * @param mixed $Sexe
     */
    public function setSexe($Sexe)
    {
        $this->Sexe = $Sexe;
    }

    /**
     * @return mixed
     */
    public function getDiplome()
    {
        return $this->Diplome;
    }

    /**
     * @param mixed $Diplome
     */
    public function setDiplome($Diplome)
    {
        $this->Diplome = $Diplome;
    }

    /**
     * @return mixed
     */
    public function getNiveauEtude()
    {
        return $this->Niveau_Etude;
    }

    /**
     * @param mixed $Niveau_Etude
     */
    public function setNiveauEtude($Niveau_Etude)
    {
        $this->Niveau_Etude = $Niveau_Etude;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getSpecialite()
    {
        return $this->Specialite;
    }

    /**
     * @param mixed $Specialite
     */
    public function setSpecialite($Specialite)
    {
        $this->Specialite = $Specialite;
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
     * @return mixed
     */
    public function getSessionFormation()
    {
        return $this->session_formation;
    }

    /**
     * @param mixed $session_formation
     */
    public function setSessionFormation($session_formation)
    {
        $this->session_formation = $session_formation;
    }


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Set type
     *
     * @param string $type
     *
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add formation
     *
     * @param \MainBundle\Entity\Formation $formation
     *
     * @return User
     */
    public function addFormation(\MainBundle\Entity\Formation $formation)
    {
        $this->formation[] = $formation;

        return $this;
    }

    public function addUser($username)
    {
        $this->formation[] = $username;

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \MainBundle\Entity\Formation $formation
     */
    public function removeFormation(\MainBundle\Entity\Formation $formation)
    {
        $this->formation->removeElement($formation);
    }

    /**
     * Add sessionFormation
     *
     * @param \MainBundle\Entity\Session_Formation $sessionFormation
     *
     * @return User
     */
    public function addSessionFormation(\MainBundle\Entity\Session_Formation $sessionFormation)
    {
        $this->session_formation[] = $sessionFormation;

        return $this;
    }

    /**
     * Remove sessionFormation
     *
     * @param \MainBundle\Entity\Session_Formation $sessionFormation
     */
    public function removeSessionFormation(\MainBundle\Entity\Session_Formation $sessionFormation)
    {
        $this->session_formation->removeElement($sessionFormation);
    }

    /**
     * @return mixed
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param mixed $session
     */
    public function setSession($session)
    {
        $this->session = $session;
    }

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * @param mixed $session_id
     */
    public function setSessionId($session_id)
    {
        $this->session_id = $session_id;
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

}
