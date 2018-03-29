<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\AdministrateurRepository")
 */
class Administrateur
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
     * @var int
     *
     * @ORM\Column(name="Telephone", type="integer")
     */
    private $telephone;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Naissance", type="datetime")
     */
    private $dateNaissance;
    /**
     *@ORM\OneToMany(targetEntity="Formateur", mappedBy="Administrateur")
     *
     */
    private $Formateur;
    /**
     *@ORM\OneToMany(targetEntity="Apprenant", mappedBy="Administrateur")
     *
     */
    private $Apprenant;
    /**
     *@ORM\OneToMany(targetEntity="Formation", mappedBy="Administrateur")
     *
     */
    private $Formation;
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
     * @return Administrateur
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
     * @return Administrateur
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
     * @return Administrateur
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
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Administrateur
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
     * Set email
     *
     * @param string $email
     *
     * @return Administrateur
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
     * Set motPasse
     *
     * @param string $motPasse
     *
     * @return Administrateur
     */
    public function setMotPasse($motPasse)
    {
        $this->motPasse = $motPasse;

        return $this;
    }

    /**
     * Get motPasse
     *
     * @return string
     */
    public function getMotPasse()
    {
        return $this->motPasse;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Administrateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
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
    public function getApprenant()
    {
        return $this->Apprenant;
    }

    /**
     * @param mixed $Apprenant
     */
    public function setApprenant($Apprenant)
    {
        $this->Apprenant = $Apprenant;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->Formation;
    }

    /**
     * @param mixed $Formation
     */
    public function setFormation($Formation)
    {
        $this->Formation = $Formation;
    }
}

