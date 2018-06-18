<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 28/05/2018
 * Time: 18:08
 */

namespace UserBundle\Handler;

use Symfony\Component\Routing\RouterInterface,
    Symfony\Component\HttpFoundation\RedirectResponse,
    Symfony\Component\HttpFoundation\Request,
    Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface,
    Symfony\Component\Security\Core\Authentication\Token\TokenInterface,
    Doctrine\ORM\EntityManager,
    Doctrine\ORM\EntityManagerInterface,
    Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Symfony\Component\Security\Core\Role\Role;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    protected $router;
    private $container;

    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router, Container $container)
    {
        $this->router = $router;
        $this->container = $container;
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        $roles = $token->getRoles();
        $roles = array_map(function($role){
            return $role->getRole();
        }, $roles);

        if (in_array('ROLE_FORMATEUR', $roles)) {
            return new RedirectResponse($this->router->generate('formateur'));
        }
        elseif (in_array('ROLE_APPRENANT', $roles)) {
            return new RedirectResponse($this->router->generate('apprenant'));
        } else {
            return new RedirectResponse($this->router->generate('fos_user_security_login'));
        }
    }

}