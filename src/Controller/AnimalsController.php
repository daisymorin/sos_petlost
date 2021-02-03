<?php

namespace App\Controller;

use App\Entity\Animals;
use App\Form\AnimalsType;
use App\Repository\AnimalsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("admin/animals")
 */
class AnimalsController extends AbstractController
{
    /**
     * @Route("/", name="animals_index", methods={"GET"})
     */
    public function index(AnimalsRepository $animalsRepository): Response
    {
        return $this->render('admin/animals/index.html.twig', [
            'animals' => $animalsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="animals_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $animal = new Animals();
        $form = $this->createForm(AnimalsType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($animal);
            $entityManager->flush();

            return $this->redirectToRoute('animals_index');
        }

        return $this->render('admin/animals/new.html.twig', [
            'animal' => $animal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="animals_show", methods={"GET"})
     */
    public function show(Animals $animal): Response
    {
        return $this->render('admin/animals/show.html.twig', [
            'animal' => $animal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="animals_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Animals $animal): Response
    {
        $form = $this->createForm(AnimalsType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('animals_index');
        }

        return $this->render('admin/animals/edit.html.twig', [
            'animal' => $animal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="animals_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Animals $animal): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animal->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($animal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('animals_index');
    }
}
