<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AnimalsRepository;
use App\Form\AnimalsType;
use App\Entity\Animals;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(AnimalsRepository $animalsRepository): Response
    {
        $listAnimals = $animalsRepository->findBy([], ['date' => 'DESC'], 12);
        return $this->render('front/default/home.html.twig', [
            'animals' => $listAnimals,
        ]);
    }

    /**
     * @Route("/animaux-disparus", name="animaux-disparus")
     */
    public function animalMissing(AnimalsRepository $animalsRepository): Response
    {
        $listAnimals = $animalsRepository->findBy(['missing' => true], ['date' => 'DESC']);
        return $this->render('front/default/animaux-perdus.html.twig', [
            'animals' => $listAnimals,
        ]);
    }

    /**
     * @Route("/animaux-trouve", name="animaux-trouve")
     */
    public function animalFound(AnimalsRepository $animalsRepository): Response
    {
        $listAnimals = $animalsRepository->findBy(['found' => true], ['date' => 'DESC']);
        return $this->render('front/default/animaux-trouves.html.twig', [
            'animals' => $listAnimals,
        ]);
    }

    /**
     * @Route("/perdu/{id}", name="showPerdu", methods={"GET"})
     */
    public function show(Animals $animal): Response
    {
        return $this->render('front/default/show-perdu.html.twig', [
            'animal' => $animal,
        ]);
    }

    /**
     * @Route("/trouve/{id}", name="showTrouve", methods={"GET"})
     */
    public function showTrouve(Animals $animal): Response
    {
        return $this->render('front/default/show-trouve.html.twig', [
            'animal' => $animal,
        ]);
    }
}
