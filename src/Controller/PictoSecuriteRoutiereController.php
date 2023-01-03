<?php

namespace App\Controller;

use App\Entity\PictoSecuriteRoutiere;
use App\Form\PictoSecuriteRoutiereType;
use App\Repository\PictoSecuriteRoutiereRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/securite/routiere")
 */
class PictoSecuriteRoutiereController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoSecuriteRoutiereRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_securite_routiere_index", methods={"GET"})
     */
    public function index(PictoSecuriteRoutiereRepository $pictoSecuriteRoutiereRepository): Response
    {
        return $this->render('picto_securite_routiere/index.html.twig', [
            'picto_securite_routieres' => $pictoSecuriteRoutiereRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_securite_routiere_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoSecuriteRoutiere();
        $form = $this->createForm(PictoSecuriteRoutiereType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_securite_routiere_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_securite_routiere_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_securite_routiere/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoSecuriteRoutiereRepository->add($pictoSecuriteRoutiere);
        //     return $this->redirectToRoute('app_picto_securite_routiere_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_securite_routiere/new.html.twig', [
        //     'picto_securite_routiere' => $pictoSecuriteRoutiere,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_securite_routiere_show", methods={"GET"})
     */
    public function show(PictoSecuriteRoutiere $pictoSecuriteRoutiere): Response
    {
        return $this->render('picto_securite_routiere/show.html.twig', [
            'picto_securite_routiere' => $pictoSecuriteRoutiere,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_securite_routiere_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoSecuriteRoutiere $pictoSecuriteRoutiere, PictoSecuriteRoutiereRepository $pictoSecuriteRoutiereRepository): Response
    {
        $form = $this->createForm(PictoSecuriteRoutiereType::class, $pictoSecuriteRoutiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoSecuriteRoutiereRepository->add($pictoSecuriteRoutiere);
            return $this->redirectToRoute('app_picto_securite_routiere_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_securite_routiere/edit.html.twig', [
            'picto_securite_routiere' => $pictoSecuriteRoutiere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_securite_routiere_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoSecuriteRoutiere $pictoSecuriteRoutiere, PictoSecuriteRoutiereRepository $pictoSecuriteRoutiereRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoSecuriteRoutiere->getId(), $request->request->get('_token'))) {
            $pictoSecuriteRoutiereRepository->remove($pictoSecuriteRoutiere);
        }

        return $this->redirectToRoute('app_picto_securite_routiere_index', [], Response::HTTP_SEE_OTHER);
    }
}
