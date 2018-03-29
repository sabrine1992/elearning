<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session_Formation
 *
 * @ORM\Table(name="session__formation")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Session_FormationRepository")
 */
class Session_Formation
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
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Fin", type="datetime")
     */
    private $dateFin;
    /**
     *@ORM\ManyToOne(targetEntity="Formateur", inversedBy="Session_Formation")
     *@ORM\JoinColumn(name="Formateur_id", referencedColumnName="id")
     *
     */
    private $Formateur;
    /**
     *@ORM\ManyToMany(targetEntity="Apprenant", mappedBy="Session_Formation")
     *@ORM\JoinTable(name="Participer_App_SF")
     *
     */
    private $Apprenant;
    /**
     *@ORM\ManyToOne(targetEntity="Formation", inversedBy="Session_Formation")
     *@ORM\JoinColumn(name="Formation_id", referencedColumnName="id")
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

