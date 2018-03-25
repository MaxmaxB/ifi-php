<?php

declare(strict_types=1);
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Created by PhpStorm.
 * User: bourdin
 * Date: 28/11/17
 * Time: 18:34
 */

/**
 * Class LagacyHomepage
 * @package App\Controller
 * @Route("/")
 */
class LagacyHomepage{
    private $twig;

    public function __construct(Environment $twig){
        $this->twig = $twig;
    }

    public function __invoke(): Response{
        return new Response($this->twig->render('homepage.html.twig'));
    }
}
