<?php

namespace App\Controller;

use App\Entity\PictoHeures;
use App\Form\PictoHeuresType;
use App\Repository\PictoHeuresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/heures")
 */
class PictoHeuresController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoHeuresRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_heures_index", methods={"GET"})
     */
    public function index(PictoHeuresRepository $pictoHeuresRepository): Response
    {
        return $this->render('picto_heures/index.html.twig', [
            'picto_heures' => $pictoHeuresRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_heures_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
       $pictogram = new PictoHeures();
        $form = $this->createForm(PictoHeuresType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_heures_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie');
                return $this->redirectToRoute('app_picto_heures_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_heures/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoHeuresRepository->add($pictoHeure);
        //     return $this->redirectToRoute('app_picto_heures_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_heures/new.html.twig', [
        //     'picto_heure' => $pictoHeure,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_heures_show", methods={"GET"})
     */
    public function show(PictoHeures $pictoHeure): Response
    {
        return $this->render('picto_heures/show.html.twig', [
            'picto_heure' => $pictoHeure,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_heures_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoHeures $pictoHeure, PictoHeuresRepository $pictoHeuresRepository): Response
    {
        $form = $this->createForm(PictoHeuresType::class, $pictoHeure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoHeuresRepository->add($pictoHeure);
            return $this->redirectToRoute('app_picto_heures_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_heures/edit.html.twig', [
            'picto_heure' => $pictoHeure,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_heures_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoHeures $pictoHeure, PictoHeuresRepository $pictoHeuresRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoHeure->getId(), $request->request->get('_token'))) {
            $pictoHeuresRepository->remove($pictoHeure);
        }

        return $this->redirectToRoute('app_picto_heures_index', [], Response::HTTP_SEE_OTHER);
    }
}
