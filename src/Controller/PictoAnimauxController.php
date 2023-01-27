<?php

namespace App\Controller;

use App\Entity\PictoAnimaux;
use App\Form\PictoAnimauxType;
use App\Repository\CategoryRepository;
use App\Repository\PictoAnimauxRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/animaux")
 */
class PictoAnimauxController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoAnimauxRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }
    /**
     * @Route("/", name="app_picto_animaux_index", methods={"GET"})
     */
    public function index(PictoAnimauxRepository $pictoAnimauxRepository ,CategoryRepository $category): Response
    {
        $category=$this->repository->findByName(['name' => 'Animaux']);
        return $this->render('picto_animaux/index.html.twig', [
            'picto_animauxes' => $pictoAnimauxRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_animaux_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoAnimaux();
        $form = $this->createForm(PictoAnimauxType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_animaux_new');
             if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_adjectifs_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_animaux/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);
        //     $pictoAnimauxRepository->add($pictoAnimaux);
        //     return $this->redirectToRoute('app_picto_animaux_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_animaux/new.html.twig', [
        //     'picto_animaux' => $pictoAnimaux,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_animaux_show", methods={"GET"})
     */
    public function show(PictoAnimaux $pictoAnimaux): Response
    {
        return $this->render('picto_animaux/show.html.twig', [
            'picto_animaux' => $pictoAnimaux,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_animaux_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoAnimaux $pictoAnimaux, PictoAnimauxRepository $pictoAnimauxRepository): Response
    {
        $form = $this->createForm(PictoAnimauxType::class, $pictoAnimaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoAnimauxRepository->add($pictoAnimaux);
            return $this->redirectToRoute('app_picto_animaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_animaux/edit.html.twig', [
            'picto_animaux' => $pictoAnimaux,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_animaux_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoAnimaux $pictoAnimaux, PictoAnimauxRepository $pictoAnimauxRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoAnimaux->getId(), $request->request->get('_token'))) {
            $pictoAnimauxRepository->remove($pictoAnimaux);
        }

        return $this->redirectToRoute('app_picto_animaux_index', [], Response::HTTP_SEE_OTHER);
    }
}
