<?php

namespace App\Controller;

use App\Entity\PictoInterrogatif;
use App\Form\PictoInterrogatifType;
use App\Repository\CategoryRepository;
use App\Repository\PictoInterrogatifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/interrogatif")
 */
class PictoInterrogatifController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoInterrogatifRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_interrogatif_index", methods={"GET"})
     */
    public function index(PictoInterrogatifRepository $pictoInterrogatifRepository, CategoryRepository  $category): Response
    {
        $category=$this->repository->findByName(['name' => 'Interrogatif']);
        return $this->render('picto_interrogatif/index.html.twig', [
            'picto_interrogatifs' => $pictoInterrogatifRepository->findAll(),
             'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_interrogatif_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoInterrogatif();
        $form = $this->createForm(PictoInterrogatifType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_interrogatif_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_interrogatif_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_interrogatif/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        // $pictoInterrogatifRepository->add($pictoInterrogatif);
        //     return $this->redirectToRoute('app_picto_interrogatif_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_interrogatif/new.html.twig', [
        //     'picto_interrogatif' => $pictoInterrogatif,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_interrogatif_show", methods={"GET"})
     */
    public function show(PictoInterrogatif $pictoInterrogatif): Response
    {
        return $this->render('picto_interrogatif/show.html.twig', [
            'picto_interrogatif' => $pictoInterrogatif,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_interrogatif_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoInterrogatif $pictoInterrogatif, PictoInterrogatifRepository $pictoInterrogatifRepository): Response
    {
        $form = $this->createForm(PictoInterrogatifType::class, $pictoInterrogatif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoInterrogatifRepository->add($pictoInterrogatif);
            return $this->redirectToRoute('app_picto_interrogatif_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_interrogatif/edit.html.twig', [
            'picto_interrogatif' => $pictoInterrogatif,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_interrogatif_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoInterrogatif $pictoInterrogatif, PictoInterrogatifRepository $pictoInterrogatifRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoInterrogatif->getId(), $request->request->get('_token'))) {
            $pictoInterrogatifRepository->remove($pictoInterrogatif);
        }

        return $this->redirectToRoute('app_picto_interrogatif_index', [], Response::HTTP_SEE_OTHER);
    }
}
