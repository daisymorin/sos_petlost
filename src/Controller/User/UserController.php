<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Animals;
use App\Form\AnimalsType;
use App\Repository\AnimalsRepository;

/**
 * @Route("user/annonce")
 */


class UserController extends AbstractController
{
    /**
     * @Route("/", name="annonces")
     */
    public function index(AnimalsRepository $animalsRepository): Response
    {
        $listAnimals = $animalsRepository->findBy(['user'=>$this->getUser()]);
        return $this->render('user/annonce/annonce-user.html.twig', [
            'animals' => $listAnimals,
        ]);
    }

     /**
     * @Route("/new-annonce", name="new_annonce", methods={"GET","POST"})
     */
    public function newAnnonce(Request $request): Response
    {
        $animal = new Animals();
        $form = $this->createForm(AnimalsType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $animal->setDate(New \DateTime());
            $entityManager->persist($animal);
            $entityManager->flush();

            return $this->redirectToRoute('annonces');
        }

        return $this->render('user/annonce/new.html.twig', [
            'animal' => $animal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/annonce/{id}", name="show-annonce", methods={"GET"})
     */
    public function showAnnonceUser(Animals $animal): Response
    {
        return $this->render('user/annonce/show-user.html.twig', [
            'animal' => $animal,
        ]);
    }

    /**
     * @Route("/annonce/{id}/edit", name="edit-annonce", methods={"GET","POST"})
     */
    public function editAnnonceUser(Request $request, Animals $animal): Response
    {
        $form = $this->createForm(AnimalsType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animal->setDate(New \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('annonces');
        }

        return $this->render('user/annonce/edit.html.twig', [
            'animal' => $animal,
            'form' => $form->createView(),
        ]);
    }
}
