<?php

namespace App\Controller;

use App\Entity\Tournament;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends AbstractController {
    /**
     * @Route("/homepage", name="homepage")
     * @throws \LogicException
     * @throws \InvalidArgumentException
     */
    public function index(Request $request) {
//        $tournament = [
//            ['name' => 'Tournament 1'],
//            ['name' => 'Tournament 2'],
//            ['name' => 'Tournament 3'],
//            ['name' => 'Tournament 4']
//        ];

//        $tournament = $this->getDoctrine()->getManager()->getRepository('App:Tournament')->findAll();
        $tournament = $this->getDoctrine()->getManager()->getRepository(Tournament::class)->findAll();

        return $this->render('homepage.html.twig', ['tournaments' => $tournament]);
//        return $this->render('homepage.html.twig',
//            ['tournaments' => $tournament,
//                'message' => $request->query->get('message', 'pas de message')
//            ]);
    }
}