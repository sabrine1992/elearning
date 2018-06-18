<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 30/05/2018
 * Time: 21:51
 */
namespace MainBundle\EventListener;

use MainBundle\Entity\Participersf;
use Doctrine\ORM\Event\LifecycleEventArgs;
class SessionFormationListener{

    public function __construct()
    {

    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Participersf) {

$entity->setUserId($entity->getUser()->getId());
$entity->setSessionformationId($entity->getSessionformation()->getId());
        }


    }
}