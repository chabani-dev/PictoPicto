<?php

namespace App\Controller;

use App\Entity\PictoAutresMots;
use App\Form\PictoAutresMotsType;
use App\Repository\PictoAutresMotsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/autres/mots")
 */
class PictoAutresMotsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoAutresMotsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_autres_mots_index", methods={"GET"})
     */
    public function index(PictoAutresMotsRepository $pictoAutresMotsRepository): Response
    {
        return $this->render('picto_autres_mots/index.html.twig', [
            'picto_autres_mots' => $pictoAutresMotsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_autres_mots_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
       $pictogram = new PictoAutresMots();
        $form = $this->createForm(PictoAutresMotsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_autres_mots_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_autres_mots_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_autres_mots_index');
            }
        }
          return $this->render('picto_autres_mots/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoAutresMotsRepository->add($pictoAutresMot);
        //     return $this->redirectToRoute('app_picto_autres_mots_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_autres_mots/new.html.twig', [
        //     'picto_autres_mot' => $pictoAutresMot,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_autres_mots_show", methods={"GET"})
     */
    public function show(PictoAutresMots $pictoAutresMot): Response
    {
        return $this->render('picto_autres_mots/show.html.twig', [
            'picto_autres_mot' => $pictoAutresMot,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_autres_mots_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoAutresMots $pictoAutresMot, PictoAutresMotsRepository $pictoAutresMotsRepository): Response
    {
        $form = $this->createForm(PictoAutresMotsType::class, $pictoAutresMot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoAutresMotsRepository->add($pictoAutresMot);
            return $this->redirectToRoute('app_picto_autres_mots_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_autres_mots/edit.html.twig', [
            'picto_autres_mot' => $pictoAutresMot,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_autres_mots_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoAutresMots $pictoAutresMot, PictoAutresMotsRepository $pictoAutresMotsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoAutresMot->getId(), $request->request->get('_token'))) {
            $pictoAutresMotsRepository->remove($pictoAutresMot);
        }

        return $this->redirectToRoute('app_picto_autres_mots_index', [], Response::HTTP_SEE_OTHER);
    }
}
