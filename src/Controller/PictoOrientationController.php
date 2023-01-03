<?php

namespace App\Controller;

use App\Entity\PictoOrientation;
use App\Form\PictoOrientationType;
use App\Repository\PictoOrientationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/orientation")
 */
class PictoOrientationController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoOrientationRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_orientation_index", methods={"GET"})
     */
    public function index(PictoOrientationRepository $pictoOrientationRepository): Response
    {
        return $this->render('picto_orientation/index.html.twig', [
            'picto_orientations' => $pictoOrientationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_orientation_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoOrientation();
        $form = $this->createForm(PictoOrientationType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_orientation_new');
            if (!$category) {
                $this->addFlash('echec', 'Doit posséder une catégorie');
                return $this->redirectToRoute('app_picto_orientation_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_orientation/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoOrientationRepository->add($pictoOrientation);
        //     return $this->redirectToRoute('app_picto_orientation_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_orientation/new.html.twig', [
        //     'picto_orientation' => $pictoOrientation,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_orientation_show", methods={"GET"})
     */
    public function show(PictoOrientation $pictoOrientation): Response
    {
        return $this->render('picto_orientation/show.html.twig', [
            'picto_orientation' => $pictoOrientation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_orientation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoOrientation $pictoOrientation, PictoOrientationRepository $pictoOrientationRepository): Response
    {
        $form = $this->createForm(PictoOrientationType::class, $pictoOrientation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoOrientationRepository->add($pictoOrientation);
            return $this->redirectToRoute('app_picto_orientation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_orientation/edit.html.twig', [
            'picto_orientation' => $pictoOrientation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_orientation_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoOrientation $pictoOrientation, PictoOrientationRepository $pictoOrientationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoOrientation->getId(), $request->request->get('_token'))) {
            $pictoOrientationRepository->remove($pictoOrientation);
        }

        return $this->redirectToRoute('app_picto_orientation_index', [], Response::HTTP_SEE_OTHER);
    }
}
