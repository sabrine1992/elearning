<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apprenant
 *
 * @ORM\Table(name="apprenant")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\ApprenantRepository")
 */
class Apprenant
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="Mot_Passe", type="string", length=255)
     */
    private $motPasse;
    /**
     * @var string
     *
     * @ORM\Column(name="Niveau_Etude", type="string", length=255)
     */
    private $nveauetude;

    /**
     * @return string
     */
    public function getNveauetude()
    {
        return $this->nveauetude;
    }

    /**
     * @param string $nveauetude
     */
    public function setNveauetude($nveauetude)
    {
        $this->nveauetude = $nveauetude;
    }

    /**
     * @return string
     */
    public function getMotPasse()
    {
        return $this->motPasse;
    }

    /**
     * @param string $motPasse
     */
    public function setMotPasse($motPasse)
    {
        $this->motPasse = $motPasse;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="Telephone", type="integer")
     */
    private $telephone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Naissance", type="datetime")
     */
    private $dateNaissance;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Apprenant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Apprenant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Apprenant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Apprenant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Apprenant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @ORM\OneToOne(targetEntity="Administrateur", mappedBy="Apprenant")
     */
    private $Administrateur;
    /**
     *@ORM\ManyToMany(targetEntity="Session_Formation", inversedBy="Apprenant")
     *@ORM\JoinTable(name="Participer_App_SF")
     *
     */
    private $Session_Formations;

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
    public function getSessionFormations()
    {
        return $this->Session_Formations;
    }

    /**
     * @param mixed $Session_Formations
     */
    public function setSessionFormations($Session_Formations)
    {
        $this->Session_Formations = $Session_Formations;
    }
}

