<?php

namespace App\Controller;

use App\Entity\Receptions;
use App\Form\ReceptionsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReceptionProductsController extends AbstractController
{
    #[Route('/reception/products', name: 'app_reception_products')]
    public function index(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $recetions = new Receptions();
        $form = $this->createForm(ReceptionsType::class, $recetions);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($recetions);
            $entityManagerInterface->flush();
        }
        return $this->render('reception_products/index.html.twig', [
            'controller_name' => 'ReceptionProductsController',
            'form' => $form->createView()
        ]);
        return $this->redirectToRoute('app_home');
    }
}
