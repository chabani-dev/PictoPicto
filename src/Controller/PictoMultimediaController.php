<?php

namespace App\Controller;

use App\Entity\PictoMultimedia;
use App\Form\PictoMultimediaType;
use App\Repository\PictoMultimediaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/multimedia")
 */
class PictoMultimediaController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoMultimediaRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_multimedia_index", methods={"GET"})
     */
    public function index(PictoMultimediaRepository $pictoMultimediaRepository): Response
    {
        return $this->render('picto_multimedia/index.html.twig', [
            'picto_multimedia' => $pictoMultimediaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_multimedia_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoMultimedia();
        $form = $this->createForm(PictoMultimediaType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_multimedia_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_multimedia_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_multimedia/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoMultimediaRepository->add($pictoMultimedia);
        //     return $this->redirectToRoute('app_picto_multimedia_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_multimedia/new.html.twig', [
        //     'picto_multimedia' => $pictoMultimedia,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_multimedia_show", methods={"GET"})
     */
    public function show(PictoMultimedia $pictoMultimedia): Response
    {
        return $this->render('picto_multimedia/show.html.twig', [
            'picto_multimedia' => $pictoMultimedia,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_multimedia_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoMultimedia $pictoMultimedia, PictoMultimediaRepository $pictoMultimediaRepository): Response
    {
        $form = $this->createForm(PictoMultimediaType::class, $pictoMultimedia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoMultimediaRepository->add($pictoMultimedia);
            return $this->redirectToRoute('app_picto_multimedia_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_multimedia/edit.html.twig', [
            'picto_multimedia' => $pictoMultimedia,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_multimedia_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoMultimedia $pictoMultimedia, PictoMultimediaRepository $pictoMultimediaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoMultimedia->getId(), $request->request->get('_token'))) {
            $pictoMultimediaRepository->remove($pictoMultimedia);
        }

        return $this->redirectToRoute('app_picto_multimedia_index', [], Response::HTTP_SEE_OTHER);
    }
}
