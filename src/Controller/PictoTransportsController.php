<?php

namespace App\Controller;

use App\Entity\PictoTransports;
use App\Form\PictoTransportsType;
use App\Repository\PictoTransportsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/transports")
 */
class PictoTransportsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoTransportsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_transports_index", methods={"GET"})
     */
    public function index(PictoTransportsRepository $pictoTransportsRepository): Response
    {
        return $this->render('picto_transports/index.html.twig', [
            'picto_transports' => $pictoTransportsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_transports_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoTransports();
        $form = $this->createForm(PictoTransportsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_transports_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_transports_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_transports_index');
            }
        }
          return $this->render('picto_transports/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoTransportsRepository->add($pictoTransport);
        //     return $this->redirectToRoute('app_picto_transports_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_transports/new.html.twig', [
        //     'picto_transport' => $pictoTransport,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_transports_show", methods={"GET"})
     */
    public function show(PictoTransports $pictoTransport): Response
    {
        return $this->render('picto_transports/show.html.twig', [
            'picto_transport' => $pictoTransport,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_transports_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoTransports $pictoTransport, PictoTransportsRepository $pictoTransportsRepository): Response
    {
        $form = $this->createForm(PictoTransportsType::class, $pictoTransport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoTransportsRepository->add($pictoTransport);
            return $this->redirectToRoute('app_picto_transports_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_transports/edit.html.twig', [
            'picto_transport' => $pictoTransport,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_transports_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoTransports $pictoTransport, PictoTransportsRepository $pictoTransportsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoTransport->getId(), $request->request->get('_token'))) {
            $pictoTransportsRepository->remove($pictoTransport);
        }

        return $this->redirectToRoute('app_picto_transports_index', [], Response::HTTP_SEE_OTHER);
    }
}
