<?php

namespace App\Controller;

use App\Entity\PictoLanguesDesSignes;
use App\Form\PictoLanguesDesSignesType;
use App\Repository\CategoryRepository;
use App\Repository\PictoLanguesDesSignesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/langues/des/signes")
 */
class PictoLanguesDesSignesController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoLanguesDesSignesRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_langues_des_signes_index", methods={"GET"})
     */
    public function index(PictoLanguesDesSignesRepository $pictoLanguesDesSignesRepository, CategoryRepository $category): Response
    {
         $category=$this->repository->findByName(['name' => 'LanguesDesSignes']);
        return $this->render('picto_langues_des_signes/index.html.twig', [
            'picto_langues_des_signes' => $pictoLanguesDesSignesRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_langues_des_signes_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoLanguesDesSignes();
        $form = $this->createForm(PictoLanguesDesSignesType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_langues_des_signes_new');
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_langues_des_signes_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_langues_des_signes/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoLanguesDesSignesRepository->add($pictoLanguesDesSigne);
        //     return $this->redirectToRoute('app_picto_langues_des_signes_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_langues_des_signes/new.html.twig', [
        //     'picto_langues_des_signe' => $pictoLanguesDesSigne,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_langues_des_signes_show", methods={"GET"})
     */
    public function show(PictoLanguesDesSignes $pictoLanguesDesSigne): Response
    {
        return $this->render('picto_langues_des_signes/show.html.twig', [
            'picto_langues_des_signe' => $pictoLanguesDesSigne,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_langues_des_signes_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoLanguesDesSignes $pictoLanguesDesSigne, PictoLanguesDesSignesRepository $pictoLanguesDesSignesRepository): Response
    {
        $form = $this->createForm(PictoLanguesDesSignesType::class, $pictoLanguesDesSigne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoLanguesDesSignesRepository->add($pictoLanguesDesSigne);
            return $this->redirectToRoute('app_picto_langues_des_signes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_langues_des_signes/edit.html.twig', [
            'picto_langues_des_signe' => $pictoLanguesDesSigne,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_langues_des_signes_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoLanguesDesSignes $pictoLanguesDesSigne, PictoLanguesDesSignesRepository $pictoLanguesDesSignesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoLanguesDesSigne->getId(), $request->request->get('_token'))) {
            $pictoLanguesDesSignesRepository->remove($pictoLanguesDesSigne);
        }

        return $this->redirectToRoute('app_picto_langues_des_signes_index', [], Response::HTTP_SEE_OTHER);
    }
}
