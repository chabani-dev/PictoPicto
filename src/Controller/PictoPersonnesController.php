<?php

namespace App\Controller;

use App\Entity\PictoPersonnes;
use App\Form\PictoPersonnesType;
use App\Repository\PictoPersonnesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/personnes")
 */
class PictoPersonnesController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoPersonnesRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_personnes_index", methods={"GET"})
     */
    public function index(PictoPersonnesRepository $pictoPersonnesRepository): Response
    {
        return $this->render('picto_personnes/index.html.twig', [
            'picto_personnes' => $pictoPersonnesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_personnes_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoPersonnes();
        $form = $this->createForm(PictoPersonnesType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('pictopersonne')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_personnes_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_personnes_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_personnes/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoPersonnesRepository->add($pictoPersonne);
        //     return $this->redirectToRoute('app_picto_personnes_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_personnes/new.html.twig', [
        //     'picto_personne' => $pictoPersonne,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_personnes_show", methods={"GET"})
     */
    public function show(PictoPersonnes $pictoPersonne): Response
    {
        return $this->render('picto_personnes/show.html.twig', [
            'picto_personne' => $pictoPersonne,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_personnes_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoPersonnes $pictoPersonne, PictoPersonnesRepository $pictoPersonnesRepository): Response
    {
        $form = $this->createForm(PictoPersonnesType::class, $pictoPersonne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoPersonnesRepository->add($pictoPersonne);
            return $this->redirectToRoute('app_picto_personnes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_personnes/edit.html.twig', [
            'picto_personne' => $pictoPersonne,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_personnes_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoPersonnes $pictoPersonne, PictoPersonnesRepository $pictoPersonnesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoPersonne->getId(), $request->request->get('_token'))) {
            $pictoPersonnesRepository->remove($pictoPersonne);
        }

        return $this->redirectToRoute('app_picto_personnes_index', [], Response::HTTP_SEE_OTHER);
    }
}
