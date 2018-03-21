<?php
/**
 * Created by PhpStorm.
 * User: lefebvreb
 * Date: 29/11/17
 * Time: 09:00
 */

namespace App\Controller;


use App\Entity\Tournament;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index(Request $request)
    {
        $tournaments = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository(Tournament::class)
            ->findAll();

        return $this->render(
            'homepage.html.twig',
            [
                'tournaments' => $tournaments,
                'message' => $request->get('message', 'default')
            ]);
//        return new Response("Welcome to your new controller!");
    }
}