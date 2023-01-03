<?php

namespace App\Controller;

use App\Entity\PictoCouleurs;
use App\Form\PictoCouleursType;
use App\Repository\PictoCouleursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/couleurs")
 */
class PictoCouleursController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoCouleursRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_couleurs_index", methods={"GET"})
     */
    public function index(PictoCouleursRepository $pictoCouleursRepository): Response
    {
        return $this->render('picto_couleurs/index.html.twig', [
            'picto_couleurs' => $pictoCouleursRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_couleurs_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoCouleurs();
        $form = $this->createForm(PictoCouleursType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_couleurs_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_couleurs_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_couleurs_index');
            }
        }
          return $this->render('picto_couleurs/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoCouleursRepository->add($pictoCouleur);
        //     return $this->redirectToRoute('app_picto_couleurs_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_couleurs/new.html.twig', [
        //     'picto_couleur' => $pictoCouleur,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_couleurs_show", methods={"GET"})
     */
    public function show(PictoCouleurs $pictoCouleur): Response
    {
        return $this->render('picto_couleurs/show.html.twig', [
            'picto_couleur' => $pictoCouleur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_couleurs_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoCouleurs $pictoCouleur, PictoCouleursRepository $pictoCouleursRepository): Response
    {
        $form = $this->createForm(PictoCouleursType::class, $pictoCouleur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoCouleursRepository->add($pictoCouleur);
            return $this->redirectToRoute('app_picto_couleurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_couleurs/edit.html.twig', [
            'picto_couleur' => $pictoCouleur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_couleurs_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoCouleurs $pictoCouleur, PictoCouleursRepository $pictoCouleursRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoCouleur->getId(), $request->request->get('_token'))) {
            $pictoCouleursRepository->remove($pictoCouleur);
        }

        return $this->redirectToRoute('app_picto_couleurs_index', [], Response::HTTP_SEE_OTHER);
    }
}
