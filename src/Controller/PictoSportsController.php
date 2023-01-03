<?php

namespace App\Controller;

use App\Entity\PictoSports;
use App\Form\PictoSportsType;
use App\Repository\PictoSportsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/sports")
 */
class PictoSportsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoSportsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_sports_index", methods={"GET"})
     */
    public function index(PictoSportsRepository $pictoSportsRepository): Response
    {
        return $this->render('picto_sports/index.html.twig', [
            'picto_sports' => $pictoSportsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_sports_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoSports();
        $form = $this->createForm(PictoSportsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_sports_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_sports_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_sports_index');
            }
        }
          return $this->render('picto_sports/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoSportsRepository->add($pictoSport);
        //     return $this->redirectToRoute('app_picto_sports_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_sports/new.html.twig', [
        //     'picto_sport' => $pictoSport,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_sports_show", methods={"GET"})
     */
    public function show(PictoSports $pictoSport): Response
    {
        return $this->render('picto_sports/show.html.twig', [
            'picto_sport' => $pictoSport,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_sports_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoSports $pictoSport, PictoSportsRepository $pictoSportsRepository): Response
    {
        $form = $this->createForm(PictoSportsType::class, $pictoSport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoSportsRepository->add($pictoSport);
            return $this->redirectToRoute('app_picto_sports_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_sports/edit.html.twig', [
            'picto_sport' => $pictoSport,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_sports_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoSports $pictoSport, PictoSportsRepository $pictoSportsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoSport->getId(), $request->request->get('_token'))) {
            $pictoSportsRepository->remove($pictoSport);
        }

        return $this->redirectToRoute('app_picto_sports_index', [], Response::HTTP_SEE_OTHER);
    }
}
