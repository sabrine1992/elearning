<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video_Chapitre
 *
 * @ORM\Table(name="video__chapitre")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Video_ChapitreRepository")
 */
class Video_Chapitre
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
     * @ORM\Column(name="Titre_Video", type="string", length=255)
     */
    private $titreVideo;


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
     * Set titreVideo
     *
     * @param string $titreVideo
     *
     * @return Video_Chapitre
     */
    public function setTitreVideo($titreVideo)
    {
        $this->titreVideo = $titreVideo;

        return $this;
    }

    /**
     * Get titreVideo
     *
     * @return string
     */
    public function getTitreVideo()
    {
        return $this->titreVideo;
    }

    /**
     *@ORM\ManyToOne(targetEntity="Formation", inversedBy="Video_Chapitre")
     *@ORM\JoinColumn(name="Formation_id", referencedColumnName="id")
     */
    private $Formation;

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

