<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test_Chapitre
 *
 * @ORM\Table(name="test__chapitre")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Test_ChapitreRepository")
 */
class Test_Chapitre
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
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;


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
     * @return Test_Chapitre
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
     * @return Test_Chapitre
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
     * @ORM\OneToOne(targetEntity="Chapitre_Formation", inversedBy="Test_Chapitre")
     */
    Private $Chapitre_Formation;

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

