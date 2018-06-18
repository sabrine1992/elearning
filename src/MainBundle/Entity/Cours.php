<?php

namespace MainBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Cours
 */
class Cours
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $cours;
    private $file;


    /**
     * @var string
     */
    private $titreformation;
    private $formation;
    private $formation_id;




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
     * Set cours
     *
     * @param string $cours
     *
     * @return Cours
     */
    public function setCours($cours)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return string
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set titreformation
     *
     * @param string $titreformation
     *
     * @return Cours
     */
    public function setTitreformation($titreformation)
    {
        $this->titreformation = $titreformation;

        return $this;
    }

    /**
     * Get titreformation
     *
     * @return string
     */
    public function getTitreformation()
    {
        return $this->titreformation;
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
    public function getFile()
    {
        return $this->file;
    }
    public function setFile(UploadedFile $file = null)
    {
        $this->file=$file;
    }

}

