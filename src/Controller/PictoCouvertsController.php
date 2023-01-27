<?php

namespace App\Controller;

use App\Entity\PictoCouverts;
use App\Form\PictoCouvertsType;
use App\Repository\CategoryRepository;
use App\Repository\PictoCouvertsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/couverts")
 */
class PictoCouvertsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoCouvertsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_couverts_index", methods={"GET"})
     */
    public function index(PictoCouvertsRepository $pictoCouvertsRepository, CategoryRepository $category): Response
    {
        $category=$this->repository->findByName(['name' => 'Couverts']);
        return $this->render('picto_couverts/index.html.twig', [
            'picto_couverts' => $pictoCouvertsRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_couverts_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoCouverts();
        $form = $this->createForm(PictoCouvertsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_couverts_new');
             if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_couverts_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_couverts/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoCouvertsRepository->add($pictoCouvert);
        //     return $this->redirectToRoute('app_picto_couverts_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_couverts/new.html.twig', [
        //     'picto_couvert' => $pictoCouvert,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_couverts_show", methods={"GET"})
     */
    public function show(PictoCouverts $pictoCouvert): Response
    {
        return $this->render('picto_couverts/show.html.twig', [
            'picto_couvert' => $pictoCouvert,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_couverts_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoCouverts $pictoCouvert, PictoCouvertsRepository $pictoCouvertsRepository): Response
    {
        $form = $this->createForm(PictoCouvertsType::class, $pictoCouvert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoCouvertsRepository->add($pictoCouvert);
            return $this->redirectToRoute('app_picto_couverts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_couverts/edit.html.twig', [
            'picto_couvert' => $pictoCouvert,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_couverts_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoCouverts $pictoCouvert, PictoCouvertsRepository $pictoCouvertsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoCouvert->getId(), $request->request->get('_token'))) {
            $pictoCouvertsRepository->remove($pictoCouvert);
        }

        return $this->redirectToRoute('app_picto_couverts_index', [], Response::HTTP_SEE_OTHER);
    }
}
