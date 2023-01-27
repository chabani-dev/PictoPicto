<?php

namespace App\Controller;

use App\Entity\PictoFruitsLegumes;
use App\Form\PictoFruitsLegumesType;
use App\Repository\CategoryRepository;
use App\Repository\PictoFruitsLegumesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/fruits/legumes")
 */
class PictoFruitsLegumesController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoFruitsLegumesRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_fruits_legumes_index", methods={"GET"})
     */
    public function index(PictoFruitsLegumesRepository $pictoFruitsLegumesRepository,CategoryRepository $category): Response
    {
         $category=$this->repository->findByName(['name' => 'FruitsLegumes']);
        return $this->render('picto_fruits_legumes/index.html.twig', [
            'picto_fruits_legumes' => $pictoFruitsLegumesRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_fruits_legumes_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoFruitsLegumes();
        $form = $this->createForm(PictoFruitsLegumesType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_fruits_legumes_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_fruits_legumes_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_fruits_legumes/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoFruitsLegumesRepository->add($pictoFruitsLegume);
        //     return $this->redirectToRoute('app_picto_fruits_legumes_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_fruits_legumes/new.html.twig', [
        //     'picto_fruits_legume' => $pictoFruitsLegume,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_fruits_legumes_show", methods={"GET"})
     */
    public function show(PictoFruitsLegumes $pictoFruitsLegume): Response
    {
        return $this->render('picto_fruits_legumes/show.html.twig', [
            'picto_fruits_legume' => $pictoFruitsLegume,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_fruits_legumes_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoFruitsLegumes $pictoFruitsLegume, PictoFruitsLegumesRepository $pictoFruitsLegumesRepository): Response
    {
        $form = $this->createForm(PictoFruitsLegumesType::class, $pictoFruitsLegume);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoFruitsLegumesRepository->add($pictoFruitsLegume);
            return $this->redirectToRoute('app_picto_fruits_legumes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_fruits_legumes/edit.html.twig', [
            'picto_fruits_legume' => $pictoFruitsLegume,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_fruits_legumes_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoFruitsLegumes $pictoFruitsLegume, PictoFruitsLegumesRepository $pictoFruitsLegumesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoFruitsLegume->getId(), $request->request->get('_token'))) {
            $pictoFruitsLegumesRepository->remove($pictoFruitsLegume);
        }

        return $this->redirectToRoute('app_picto_fruits_legumes_index', [], Response::HTTP_SEE_OTHER);
    }
}
