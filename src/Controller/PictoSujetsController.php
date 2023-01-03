<?php

namespace App\Controller;

use App\Entity\PictoSujets;
use App\Form\PictoSujetsType;
use App\Repository\PictoSujetsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/sujets")
 */
class PictoSujetsController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoSujetsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }


    /**
     * @Route("/", name="app_picto_sujets_index", methods={"GET"})
     */
    public function index(PictoSujetsRepository $pictoSujetsRepository): Response
    {
        return $this->render('picto_sujets/index.html.twig', [
            'picto_sujets' => $pictoSujetsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_sujets_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoSujets();
        $form = $this->createForm(PictoSujetsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_sujets_new');
            if (!$category) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_picto');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
            return $this->render('picto_sujets/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoSujetsRepository->add($pictoSujet);
        //     return $this->redirectToRoute('app_picto_sujets_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_sujets/new.html.twig', [
        //     'picto_sujet' => $pictoSujet,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_sujets_show", methods={"GET"})
     */
    public function show(PictoSujets $pictoSujet): Response
    {
        return $this->render('picto_sujets/show.html.twig', [
            'picto_sujet' => $pictoSujet,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_sujets_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoSujets $pictoSujet, PictoSujetsRepository $pictoSujetsRepository): Response
    {
        $form = $this->createForm(PictoSujetsType::class, $pictoSujet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoSujetsRepository->add($pictoSujet);
            return $this->redirectToRoute('app_picto_sujets_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_sujets/edit.html.twig', [
            'picto_sujet' => $pictoSujet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_sujets_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoSujets $pictoSujet, PictoSujetsRepository $pictoSujetsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoSujet->getId(), $request->request->get('_token'))) {
            $pictoSujetsRepository->remove($pictoSujet);
        }

        return $this->redirectToRoute('app_picto_sujets_index', [], Response::HTTP_SEE_OTHER);
    }
}
