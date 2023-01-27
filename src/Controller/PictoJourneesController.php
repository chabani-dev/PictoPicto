<?php

namespace App\Controller;

use App\Entity\PictoJournees;
use App\Form\PictoJourneesType;
use App\Repository\CategoryRepository;
use App\Repository\PictoJourneesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/journees")
 */
class PictoJourneesController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoJourneesRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_journees_index", methods={"GET"})
     */
    public function index(PictoJourneesRepository $pictoJourneesRepository, CategoryRepository $category): Response
    {
         $category=$this->repository->findByName(['name' => 'Journees']);
        return $this->render('picto_journees/index.html.twig', [
            'picto_journees' => $pictoJourneesRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_journees_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoJournees();
        $form = $this->createForm(PictoJourneesType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_journees_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_journees_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_journees/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoJourneesRepository->add($pictoJournee);
        //     return $this->redirectToRoute('app_picto_journees_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_journees/new.html.twig', [
        //     'picto_journee' => $pictoJournee,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_journees_show", methods={"GET"})
     */
    public function show(PictoJournees $pictoJournee): Response
    {
        return $this->render('picto_journees/show.html.twig', [
            'picto_journee' => $pictoJournee,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_journees_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoJournees $pictoJournee, PictoJourneesRepository $pictoJourneesRepository): Response
    {
        $form = $this->createForm(PictoJourneesType::class, $pictoJournee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoJourneesRepository->add($pictoJournee);
            return $this->redirectToRoute('app_picto_journees_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_journees/edit.html.twig', [
            'picto_journee' => $pictoJournee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_journees_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoJournees $pictoJournee, PictoJourneesRepository $pictoJourneesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoJournee->getId(), $request->request->get('_token'))) {
            $pictoJourneesRepository->remove($pictoJournee);
        }

        return $this->redirectToRoute('app_picto_journees_index', [], Response::HTTP_SEE_OTHER);
    }
}
