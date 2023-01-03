<?php

namespace App\Controller;

use App\Entity\PictoPetitsMots;
use App\Form\PictoPetitsMotsType;
use App\Entity\SubCategory;
use App\Repository\PictoPetitsMotsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/petits/mots")
 */
class PictoPetitsMotsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoPetitsMotsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_petits_mots_index", methods={"GET"})
     */
    public function index(PictoPetitsMotsRepository $pictoPetitsMotsRepository): Response
    {
        return $this->render('picto_petits_mots/index.html.twig', [
            'picto_petits_mots' => $pictoPetitsMotsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_petits_mots_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoPetitsMots();
        $form = $this->createForm(PictoPetitsMotsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_petits_mots_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_petits_mots_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_petits_mots/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoPetitsMotsRepository->add($pictoPetitsMot);
        //     return $this->redirectToRoute('app_picto_petits_mots_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_petits_mots/new.html.twig', [
        //     'picto_petits_mot' => $pictoPetitsMot,
        //     'form' => $form->createView(),
        // ]);
    }

    //  /**
    //  * @Route("/newSubCategory", name="newSubCategory")
    //  */
    // public function addSubCategory (Request $request): Response
    // {
    //     $subcategory = new SubCategory();
    //     $form = $this->createForm(CreateSubCategoryType::class, $subcategory);
    //     $form->handleRequest($request);

    //     $therapistId=$this->em->getRepository(Therapist::class)->find($this->getUser()->getId());
    //     $subcategory->setTherapistId($therapistId);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $subcategory = $form->getData();
    //         $this->em->persist($subcategory);
    //         $this->em->flush();
    //         $this->addFlash('success', 'Sous catégorie créé avec succès');
    //         return $this->redirectToRoute('category');
    //     }

    //     return $this->render('subcategory/createSubCategory.html.twig', [
    //         'subcategory' => $subcategory,
    //         'form' => $form->createView()
    //     ]);
    // }

    /**
     * @Route("/{id}", name="app_picto_petits_mots_show", methods={"GET"})
     */
    public function show(PictoPetitsMots $pictoPetitsMot): Response
    {
        return $this->render('picto_petits_mots/show.html.twig', [
            'picto_petits_mot' => $pictoPetitsMot,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_petits_mots_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoPetitsMots $pictoPetitsMot, PictoPetitsMotsRepository $pictoPetitsMotsRepository): Response
    {
        $form = $this->createForm(PictoPetitsMotsType::class, $pictoPetitsMot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoPetitsMotsRepository->add($pictoPetitsMot);
            return $this->redirectToRoute('app_picto_petits_mots_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_petits_mots/edit.html.twig', [
            'picto_petits_mot' => $pictoPetitsMot,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_petits_mots_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoPetitsMots $pictoPetitsMot, PictoPetitsMotsRepository $pictoPetitsMotsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoPetitsMot->getId(), $request->request->get('_token'))) {
            $pictoPetitsMotsRepository->remove($pictoPetitsMot);
        }

        return $this->redirectToRoute('app_picto_petits_mots_index', [], Response::HTTP_SEE_OTHER);
    }
}
