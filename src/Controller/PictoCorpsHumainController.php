<?php

namespace App\Controller;

use App\Entity\PictoCorpsHumain;
use App\Form\PictoCorpsHumainType;
use App\Repository\CategoryRepository;
use App\Repository\PictoCorpsHumainRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/corps/humain")
 */
class PictoCorpsHumainController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoCorpsHumainRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_corps_humain_index", methods={"GET"})
     */
    public function index(PictoCorpsHumainRepository $pictoCorpsHumainRepository, CategoryRepository $category): Response
    {
         $category=$this->repository->findByName(['name' => 'CorpsHumain']);
        return $this->render('picto_corps_humain/index.html.twig', [
            'picto_corps_humains' => $pictoCorpsHumainRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_corps_humain_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoCorpsHumain();
        $form = $this->createForm(PictoCorpsHumainType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_corps_humain_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_corps_humain_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_corps_humain/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoCorpsHumainRepository->add($pictoCorpsHumain);
        //     return $this->redirectToRoute('app_picto_corps_humain_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_corps_humain/new.html.twig', [
        //     'picto_corps_humain' => $pictoCorpsHumain,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_corps_humain_show", methods={"GET"})
     */
    public function show(PictoCorpsHumain $pictoCorpsHumain): Response
    {
        return $this->render('picto_corps_humain/show.html.twig', [
            'picto_corps_humain' => $pictoCorpsHumain,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_corps_humain_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoCorpsHumain $pictoCorpsHumain, PictoCorpsHumainRepository $pictoCorpsHumainRepository): Response
    {
        $form = $this->createForm(PictoCorpsHumainType::class, $pictoCorpsHumain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoCorpsHumainRepository->add($pictoCorpsHumain);
            return $this->redirectToRoute('app_picto_corps_humain_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_corps_humain/edit.html.twig', [
            'picto_corps_humain' => $pictoCorpsHumain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_corps_humain_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoCorpsHumain $pictoCorpsHumain, PictoCorpsHumainRepository $pictoCorpsHumainRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoCorpsHumain->getId(), $request->request->get('_token'))) {
            $pictoCorpsHumainRepository->remove($pictoCorpsHumain);
        }

        return $this->redirectToRoute('app_picto_corps_humain_index', [], Response::HTTP_SEE_OTHER);
    }
}
