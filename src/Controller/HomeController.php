<?php

/**
 * Created by PhpStorm.
 * User: g361183
 * Date: 3/2/20
 * Time: 8:31 AM
 */

namespace App\Controller;

use App\Service\LdapService;
use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

Class HomeController extends AbstractController
{
    private $ldapservice;
    private $name;
    private $session;

    public function __construct(LdapService $ldapService, SessionInterface $session)
    {
     $this->ldapservice=$ldapService;
     $this->session=$session;

    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $matricule=$this->getUser()->getUsername();
        $this->name=$this->ldapservice->getUserByName($matricule);
//        $matricule='g361183';
//        $this->name='Ben Rached Sonia';
        return $this->render('base.html.twig',
            [
                'userName'=>$this->ldapservice->getUserSession($this->session, 'username',$this->getUser()->getUsername()),
            ]);
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        $this->session->clear();
        return $this->getParameter('cas_logout_url');

    }


}