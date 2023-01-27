<?php

namespace App\Controller;

use App\Entity\PictoBoissons;
use App\Form\PictoBoissonsType;
use App\Repository\CategoryRepository;
use App\Repository\PictoBoissonsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/boissons")
 */
class PictoBoissonsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoBoissonsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_boissons_index", methods={"GET"})
     */
    public function index(PictoBoissonsRepository $pictoBoissonsRepository,CategoryRepository $category): Response
    {
         $category=$this->repository->findByName(['name' => 'Boissons']);
        return $this->render('picto_boissons/index.html.twig', [
            'picto_boissons' => $pictoBoissonsRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_boissons_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
       $pictogram = new PictoBoissons();
        $form = $this->createForm(PictoBoissonsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_boissons_new');
             if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_boissons_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_boissons/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);
        //     $pictoBoissonsRepository->add($pictoBoisson);
        //     return $this->redirectToRoute('app_picto_boissons_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_boissons/new.html.twig', [
        //     'picto_boisson' => $pictoBoisson,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_boissons_show", methods={"GET"})
     */
    public function show(PictoBoissons $pictoBoisson): Response
    {
        return $this->render('picto_boissons/show.html.twig', [
            'picto_boisson' => $pictoBoisson,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_boissons_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoBoissons $pictoBoisson, PictoBoissonsRepository $pictoBoissonsRepository): Response
    {
        $form = $this->createForm(PictoBoissonsType::class, $pictoBoisson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoBoissonsRepository->add($pictoBoisson);
            return $this->redirectToRoute('app_picto_boissons_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_boissons/edit.html.twig', [
            'picto_boisson' => $pictoBoisson,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_boissons_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoBoissons $pictoBoisson, PictoBoissonsRepository $pictoBoissonsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoBoisson->getId(), $request->request->get('_token'))) {
            $pictoBoissonsRepository->remove($pictoBoisson);
        }

        return $this->redirectToRoute('app_picto_boissons_index', [], Response::HTTP_SEE_OTHER);
    }
}
