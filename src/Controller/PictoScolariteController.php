<?php

namespace App\Controller;

use App\Entity\PictoScolarite;
use App\Form\PictoScolariteType;
use App\Repository\PictoScolariteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/scolarite")
 */
class PictoScolariteController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoScolariteRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_scolarite_index", methods={"GET"})
     */
    public function index(PictoScolariteRepository $pictoScolariteRepository): Response
    {
        return $this->render('picto_scolarite/index.html.twig', [
            'picto_scolarites' => $pictoScolariteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_scolarite_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoScolarite();
        $form = $this->createForm(PictoScolariteType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_adjectifs_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_scolarite_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_scolarite_index');
            }
        }
          return $this->render('picto_scolarite/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoScolariteRepository->add($pictoScolarite);
        //     return $this->redirectToRoute('app_picto_scolarite_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_scolarite/new.html.twig', [
        //     'picto_scolarite' => $pictoScolarite,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_scolarite_show", methods={"GET"})
     */
    public function show(PictoScolarite $pictoScolarite): Response
    {
        return $this->render('picto_scolarite/show.html.twig', [
            'picto_scolarite' => $pictoScolarite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_scolarite_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoScolarite $pictoScolarite, PictoScolariteRepository $pictoScolariteRepository): Response
    {
        $form = $this->createForm(PictoScolariteType::class, $pictoScolarite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoScolariteRepository->add($pictoScolarite);
            return $this->redirectToRoute('app_picto_scolarite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_scolarite/edit.html.twig', [
            'picto_scolarite' => $pictoScolarite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_scolarite_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoScolarite $pictoScolarite, PictoScolariteRepository $pictoScolariteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoScolarite->getId(), $request->request->get('_token'))) {
            $pictoScolariteRepository->remove($pictoScolarite);
        }

        return $this->redirectToRoute('app_picto_scolarite_index', [], Response::HTTP_SEE_OTHER);
    }
}
