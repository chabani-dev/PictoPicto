<?php

namespace App\Controller;

use App\Entity\PictoComportements;
use App\Form\PictoComportementsType;
use App\Repository\PictoComportementsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/comportements")
 */
class PictoComportementsController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoComportementsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_comportements_index", methods={"GET"})
     */
    public function index(PictoComportementsRepository $pictoComportementsRepository): Response
    {
        return $this->render('picto_comportements/index.html.twig', [
            'picto_comportements' => $pictoComportementsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_comportements_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoComportements();
        $form = $this->createForm(PictoComportementsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_comportements_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_comportements_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_comportements_index');
            }
        }
          return $this->render('picto_comportements/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoComportementsRepository->add($pictoComportement);
        //     return $this->redirectToRoute('app_picto_comportements_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_comportements/new.html.twig', [
        //     'picto_comportement' => $pictoComportement,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_comportements_show", methods={"GET"})
     */
    public function show(PictoComportements $pictoComportement): Response
    {
        return $this->render('picto_comportements/show.html.twig', [
            'picto_comportement' => $pictoComportement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_comportements_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoComportements $pictoComportement, PictoComportementsRepository $pictoComportementsRepository): Response
    {
        $form = $this->createForm(PictoComportementsType::class, $pictoComportement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoComportementsRepository->add($pictoComportement);
            return $this->redirectToRoute('app_picto_comportements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_comportements/edit.html.twig', [
            'picto_comportement' => $pictoComportement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_comportements_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoComportements $pictoComportement, PictoComportementsRepository $pictoComportementsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoComportement->getId(), $request->request->get('_token'))) {
            $pictoComportementsRepository->remove($pictoComportement);
        }

        return $this->redirectToRoute('app_picto_comportements_index', [], Response::HTTP_SEE_OTHER);
    }
}
