<?php

namespace App\Controller;

use App\Entity\PictoMeteo;
use App\Form\PictoMeteoType;
use App\Repository\PictoMeteoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/meteo")
 */
class PictoMeteoController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoMeteoRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_meteo_index", methods={"GET"})
     */
    public function index(PictoMeteoRepository $pictoMeteoRepository): Response
    {
        return $this->render('picto_meteo/index.html.twig', [
            'picto_meteos' => $pictoMeteoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_meteo_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoMeteo();
        $form = $this->createForm(PictoMeteoType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_meteo_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_meteo_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_meteo/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        // $pictoMeteoRepository->add($pictoMeteo);
        //     return $this->redirectToRoute('app_picto_meteo_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_meteo/new.html.twig', [
        //     'picto_meteo' => $pictoMeteo,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_meteo_show", methods={"GET"})
     */
    public function show(PictoMeteo $pictoMeteo): Response
    {
        return $this->render('picto_meteo/show.html.twig', [
            'picto_meteo' => $pictoMeteo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_meteo_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoMeteo $pictoMeteo, PictoMeteoRepository $pictoMeteoRepository): Response
    {
        $form = $this->createForm(PictoMeteoType::class, $pictoMeteo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoMeteoRepository->add($pictoMeteo);
            return $this->redirectToRoute('app_picto_meteo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_meteo/edit.html.twig', [
            'picto_meteo' => $pictoMeteo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_meteo_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoMeteo $pictoMeteo, PictoMeteoRepository $pictoMeteoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoMeteo->getId(), $request->request->get('_token'))) {
            $pictoMeteoRepository->remove($pictoMeteo);
        }

        return $this->redirectToRoute('app_picto_meteo_index', [], Response::HTTP_SEE_OTHER);
    }
}
