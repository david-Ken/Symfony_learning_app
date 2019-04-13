<?php
namespace  App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class HomeController extends  AbstractController {
    /**
     * @var Environment
     */

    private  $twig;

    public function __construct(Environment $twig){
        $this->twig = $twig;
    }
    /**
     * @Route("/", name="home")
     * @return Response
     * @throws  \Twig_Error_Loader
     * @throws  \Twig_Error_Runtime
     * @throws  \Twig_Error_Syntax
     */
    public function index(): Response{
        return $this->render('pages\home.html.twig');
    }
}