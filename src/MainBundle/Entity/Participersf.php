<?php

namespace MainBundle\Entity;

/**
 * Participersf
 */
class Participersf
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $status;
    private $sessionformation;
    private $user;
    private $user_id;
    private $sessionformation_id;



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
     * Set status
     *
     * @param string $status
     *
     * @return Participersf
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }



    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



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

    /**
     * @return mixed
     */
    public function getSessionformation()
    {
        return $this->sessionformation;
    }

    /**
     * @param mixed $sessionformation
     */
    public function setSessionformation($sessionformation)
    {
        $this->sessionformation = $sessionformation;
    }



}

