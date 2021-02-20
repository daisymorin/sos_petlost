<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\AnimalsRepository;
use App\Form\AnimalsType;
use App\Entity\Animals;
use App\Entity\Comment;
use App\Form\CommentType;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(AnimalsRepository $animalsRepository): Response
    {
        $listAnimals = $animalsRepository->findBy([], ['date' => 'DESC'], 16);
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
     * @Route("/perdu/{id}", name="showPerdu", methods={"GET", "POST"})
     */
    public function show(Request $request, Animals $animal): Response
    {
       
        return $this->render('front/default/show-perdu.html.twig', [
            'animal' => $animal,
        ]);
    }

    /**
     * @Route("/trouve/{id}", name="showTrouve", methods={"GET", "POST"})
     */
    public function showTrouve(Request $request, Animals $animal): Response
    {
       
        return $this->render('front/default/show-trouve.html.twig', [
            'animal' => $animal,
        ]);
    }

    /**
     * @Route("/trouve-comment/{id}", name="showCommentTrouve", methods={"GET", "POST"})
     */
    public function showCommentTrouve(Request $request, Animals $animal): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(New \DateTime())
                ->setAnimals($animal);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('showTrouve', ['id' =>$animal->getId()]);
        }

        return $this->render('front/comment/new-comment-trouve.html.twig', [
            'animal' => $animal,
            'comment' => $comment,
            'form' => $form->createView()
        ]);
    }

     /**
     * @Route("/perdu-comment/{id}", name="showCommentPerdu", methods={"GET", "POST"})
     */
    public function showCommentPerdu(Request $request, Animals $animal): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(New \DateTime())
                ->setAnimals($animal);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('showPerdu', ['id' =>$animal->getId()]);
        }

        return $this->render('front/comment/new-comment-perdu.html.twig', [
            'animal' => $animal,
            'comment' => $comment,
            'form' => $form->createView()
        ]);
    }

    
}
