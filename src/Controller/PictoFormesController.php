<?php

namespace App\Controller;

use App\Entity\PictoFormes;
use App\Form\PictoFormesType;
use App\Repository\PictoFormesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/formes")
 */
class PictoFormesController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoFormesRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_formes_index", methods={"GET"})
     */
    public function index(PictoFormesRepository $pictoFormesRepository): Response
    {
        return $this->render('picto_formes/index.html.twig', [
            'picto_formes' => $pictoFormesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_formes_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
       $pictogram = new PictoFormes();
        $form = $this->createForm(PictoFormesType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_formes_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_formes_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_formes_index');
            }
        }
          return $this->render('picto_formes/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoFormesRepository->add($pictoForme);
        //     return $this->redirectToRoute('app_picto_formes_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_formes/new.html.twig', [
        //     'picto_forme' => $pictoForme,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_formes_show", methods={"GET"})
     */
    public function show(PictoFormes $pictoForme): Response
    {
        return $this->render('picto_formes/show.html.twig', [
            'picto_forme' => $pictoForme,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_formes_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoFormes $pictoForme, PictoFormesRepository $pictoFormesRepository): Response
    {
        $form = $this->createForm(PictoFormesType::class, $pictoForme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoFormesRepository->add($pictoForme);
            return $this->redirectToRoute('app_picto_formes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_formes/edit.html.twig', [
            'picto_forme' => $pictoForme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_formes_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoFormes $pictoForme, PictoFormesRepository $pictoFormesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoForme->getId(), $request->request->get('_token'))) {
            $pictoFormesRepository->remove($pictoForme);
        }

        return $this->redirectToRoute('app_picto_formes_index', [], Response::HTTP_SEE_OTHER);
    }
}
