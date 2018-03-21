<?php
/**
 * Created by PhpStorm.
 * User: lefebvreb
 * Date: 28/11/17
 * Time: 17:34
 */

declare(strict_types=1);

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * @Route("/", name="root")
 */
class LegacyController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(): Response
    {
        return new Response(
            $this->twig->render('homepage.html.twig')
        );
//        return new Response("Hello world!");
    }
}