<?php

namespace App\Controller;

use App\Entity\PictoJouet;
use App\Form\PictoJouetType;
use App\Repository\PictoJouetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/jouet")
 */
class PictoJouetController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoJouetRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_jouet_index", methods={"GET"})
     */
    public function index(PictoJouetRepository $pictoJouetRepository): Response
    {
        return $this->render('picto_jouet/index.html.twig', [
            'picto_jouets' => $pictoJouetRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_jouet_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoJouet();
        $form = $this->createForm(PictoJouetType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_jouet_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_jouet_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_jouet_index');
            }
        }
          return $this->render('picto_jouet/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        // $pictoJouetRepository->add($pictoJouet);
        //     return $this->redirectToRoute('app_picto_jouet_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_jouet/new.html.twig', [
        //     'picto_jouet' => $pictoJouet,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_jouet_show", methods={"GET"})
     */
    public function show(PictoJouet $pictoJouet): Response
    {
        return $this->render('picto_jouet/show.html.twig', [
            'picto_jouet' => $pictoJouet,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_jouet_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoJouet $pictoJouet, PictoJouetRepository $pictoJouetRepository): Response
    {
        $form = $this->createForm(PictoJouetType::class, $pictoJouet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoJouetRepository->add($pictoJouet);
            return $this->redirectToRoute('app_picto_jouet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_jouet/edit.html.twig', [
            'picto_jouet' => $pictoJouet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_jouet_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoJouet $pictoJouet, PictoJouetRepository $pictoJouetRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoJouet->getId(), $request->request->get('_token'))) {
            $pictoJouetRepository->remove($pictoJouet);
        }

        return $this->redirectToRoute('app_picto_jouet_index', [], Response::HTTP_SEE_OTHER);
    }
}
