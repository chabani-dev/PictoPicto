<?php

namespace App\Controller;

use App\Entity\PictoVetements;
use App\Form\PictoVetementsType;
use App\Repository\CategoryRepository;
use App\Repository\PictoVetementsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/vetements")
 */
class PictoVetementsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoVetementsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_vetements_index", methods={"GET"})
     */
    public function index(PictoVetementsRepository $pictoVetementsRepository,CategoryRepository $category): Response
    {
         $category=$this->repository->findByName(['name' => 'Vetements']);
        return $this->render('picto_vetements/index.html.twig', [
            'picto_vetements' => $pictoVetementsRepository->findAll(),

            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_vetements_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoVetements();
        $form = $this->createForm(PictoVetementsType::class,  $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // if ( $category ) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ');
            //     return $this->redirectToRoute('app_picto_vetements_new');
             if (!$category ) {
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
            return $this->render('picto_vetements/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoVetementsRepository->add($pictoVetement);
        //     return $this->redirectToRoute('app_picto_vetements_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_vetements/new.html.twig', [
        //     'picto_vetement' => $pictoVetement,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_vetements_show", methods={"GET"})
     */
    public function show(PictoVetements $pictoVetement): Response
    {
        return $this->render('picto_vetements/show.html.twig', [
            'picto_vetement' => $pictoVetement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_vetements_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoVetements $pictoVetement, PictoVetementsRepository $pictoVetementsRepository): Response
    {
        $form = $this->createForm(PictoVetementsType::class, $pictoVetement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoVetementsRepository->add($pictoVetement);
            return $this->redirectToRoute('app_picto_vetements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_vetements/edit.html.twig', [
            'picto_vetement' => $pictoVetement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_vetements_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoVetements $pictoVetement, PictoVetementsRepository $pictoVetementsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoVetement->getId(), $request->request->get('_token'))) {
            $pictoVetementsRepository->remove($pictoVetement);
        }

        return $this->redirectToRoute('app_picto_vetements_index', [], Response::HTTP_SEE_OTHER);
    }
}
