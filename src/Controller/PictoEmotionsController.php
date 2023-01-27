<?php

namespace App\Controller;

use App\Entity\PictoEmotions;
use App\Form\PictoEmotionsType;
use App\Repository\CategoryRepository;
use App\Repository\PictoEmotionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/emotions")
 */
class PictoEmotionsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoEmotionsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_emotions_index", methods={"GET"})
     */
    public function index(PictoEmotionsRepository $pictoEmotionsRepository, CategoryRepository $category): Response
    {
        $category=$this->repository->findByName(['name' => 'Emotions']);
        return $this->render('picto_emotions/index.html.twig', [
            'picto_emotions' => $pictoEmotionsRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_emotions_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
       $pictogram = new PictoEmotions();
        $form = $this->createForm(PictoEmotionsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_emotions_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_emotions_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_emotions/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoEmotionsRepository->add($pictoEmotion);
        //     return $this->redirectToRoute('app_picto_emotions_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_emotions/new.html.twig', [
        //     'picto_emotion' => $pictoEmotion,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_emotions_show", methods={"GET"})
     */
    public function show(PictoEmotions $pictoEmotion): Response
    {
        return $this->render('picto_emotions/show.html.twig', [
            'picto_emotion' => $pictoEmotion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_emotions_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoEmotions $pictoEmotion, PictoEmotionsRepository $pictoEmotionsRepository): Response
    {
        $form = $this->createForm(PictoEmotionsType::class, $pictoEmotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoEmotionsRepository->add($pictoEmotion);
            return $this->redirectToRoute('app_picto_emotions_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_emotions/edit.html.twig', [
            'picto_emotion' => $pictoEmotion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_emotions_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoEmotions $pictoEmotion, PictoEmotionsRepository $pictoEmotionsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoEmotion->getId(), $request->request->get('_token'))) {
            $pictoEmotionsRepository->remove($pictoEmotion);
        }

        return $this->redirectToRoute('app_picto_emotions_index', [], Response::HTTP_SEE_OTHER);
    }
}
