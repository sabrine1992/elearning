<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 30/05/2018
 * Time: 21:51
 */
namespace MainBundle\EventListener;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

use MainBundle\Entity\cours;
use MainBundle\Service\FileUploader;
class CoursUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    private function uploadFile($entity)
    {
        // upload only works for Product entities
        if (!$entity instanceof cours) {
            return;
        }

        $file = $entity->getCours();

        if ($file instanceof UploadedFile) {
            $fileName = $this->uploader->upload($file);
            $entity->setCours($fileName);
        }
    }
    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof cours) {
            return;
        }

        if ($fileName = $entity->getCours()) {
            $entity->setCours(new File($this->uploader->getTargetDirectory().'/'.$fileName));
        }
    }
}