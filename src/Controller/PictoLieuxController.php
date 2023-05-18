<?php

namespace App\Controller;

use App\Entity\PictoLieux;
use App\Form\PictoLieuxType;
use App\Entity\SubCategory;
use App\Repository\CategoryRepository;
use App\Repository\PictoLieuxRepository;
use App\Repository\SubCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lieux")
 */
class PictoLieuxController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var SubCategoryRepository
     */
    private $subRepository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(SubCategoryRepository $subRepository,PictoLieuxRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->subRepository = $subRepository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_lieux_index", methods={"GET"})
     */
    public function index(SubCategoryRepository $subRepository,PictoLieuxRepository $pictoLieuxRepository, CategoryRepository $category): Response
    
    {
                // récupère toutes les catégories

                 $category = $this->repository->findBy(['name' => 'Objets']);
if (!empty($category)) {
    $category = $category[0];
    $subcategories = $subRepository->findBy(['category_id' => $category->getId()]);
} else {
    $category = null;
    $subcategories = null;
}
return $this->render('picto_lieux/index.html.twig', [
    'picto_objets' => $pictoLieuxRepository->findAll(),
    'category' => $category,
    'subcategories' => $subcategories,
    ]);

    //      $category=$this->repository->findByName(['name' => 'Lieux']);

    //     $subcategories = $subRepository->findBy(['category_id' => $category->getId()]);
    //    // $categories = $this->repository->findAll();

    //     return $this->render('picto_lieux/index.html.twig', [
    //         'picto_lieuxes' => $pictoLieuxRepository->findAll(),
    //     'category' => $category,
    //     'subcategories' => $subcategories,
    //     ]);
    }

    /**
     * @Route("/new", name="app_picto_lieux_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoLieux();
        $form = $this->createForm(PictoLieuxType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_lieux_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_lieux_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_lieux/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        // $pictoLieuxRepository->add($pictoLieux);
        //     return $this->redirectToRoute('app_picto_lieux_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_lieux/new.html.twig', [
        //     'picto_lieux' => $pictoLieux,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_lieux_show", methods={"GET"})
     */
    public function show(PictoLieux $pictoLieux): Response
    {
        return $this->render('picto_lieux/show.html.twig', [
            'picto_lieux' => $pictoLieux,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_lieux_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoLieux $pictoLieux, PictoLieuxRepository $pictoLieuxRepository): Response
    {
        $form = $this->createForm(PictoLieuxType::class, $pictoLieux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoLieuxRepository->add($pictoLieux);
            return $this->redirectToRoute('app_picto_lieux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_lieux/edit.html.twig', [
            'picto_lieux' => $pictoLieux,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_lieux_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoLieux $pictoLieux, PictoLieuxRepository $pictoLieuxRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoLieux->getId(), $request->request->get('_token'))) {
            $pictoLieuxRepository->remove($pictoLieux);
        }

        return $this->redirectToRoute('app_picto_lieux_index', [], Response::HTTP_SEE_OTHER);
    }
}
