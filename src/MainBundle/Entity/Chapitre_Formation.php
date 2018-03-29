<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre_Formation
 *
 * @ORM\Table(name="chapitre__formation")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Chapitre_FormationRepository")
 */
class Chapitre_Formation
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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=255)
     */
    private $contenu;
    /**
     * @ORM\OneToOne(targetEntity="Test_Chapitre", mappedBy="Chapitre_Formation")
     * @ORM\JoinColumn(name="Test_Chapitre_id", referencedColumnName="id")
     */
    Private $Test_Chapitre;
    /**
     *@ORM\ManyToOne(targetEntity="Formation", inversedBy="Chapitre_Formation")
     *@ORM\JoinColumn(name="Formation_id", referencedColumnName="id")
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Chapitre_Formation
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Chapitre_Formation
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }/**
 * @return mixed
 */public function getTestChapitre()
{
    return $this->Test_Chapitre;
}

    /**
     * @param mixed $Test_Chapitre
     */
    public function setTestChapitre($Test_Chapitre)
    {
        $this->Test_Chapitre = $Test_Chapitre;
    }

    /**
     * @param mixed $Formation
     */
    public function setFormation($Formation)
    {
        $this->Formation = $Formation;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->Formation;
    }
}

