<?php

namespace App\Controller;

use App\Entity\PictoObjets;
use App\Entity\SubCategory;
use App\Form\PictoObjetsType;
use App\Repository\PictoObjetsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/objets")
 */
class PictoObjetsController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoObjetsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_objets_index", methods={"GET"})
     */
    public function index(PictoObjetsRepository $pictoObjetsRepository): Response
    {
        return $this->render('picto_objets/index.html.twig', [
            'picto_objets' => $pictoObjetsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_objets_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoObjets();
        $form = $this->createForm(PictoObjetsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_objets_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_objets_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_objets_index');
            }
        }
          return $this->render('picto_objets/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        // $pictoObjetsRepository->add($pictoObjet);
        //     return $this->redirectToRoute('app_picto_objets_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_objets/new.html.twig', [
        //     'picto_objet' => $pictoObjet,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/picto/objets/newSubCategory", name="picto/objets/newSubCategory")
     */
    public function addSubCategory (Request $request): Response
    {
        $subcategory = new SubCategory();
        $form = $this->createForm(CreateSubCategoryType::class, $subcategory);
        $form->handleRequest($request);

        $therapistId=$this->em->getRepository(Therapist::class)->find($this->getUser()->getId());
        $subcategory->setTherapistId($therapistId);

        if ($form->isSubmitted() && $form->isValid()) {
            $subcategory = $form->getData();
            $this->em->persist($subcategory);
            $this->em->flush();
            $this->addFlash('success', 'Sous catégorie créé avec succès');
            return $this->redirectToRoute('category');
        }

        return $this->render('app_picto_objets_index', [
            'subcategory' => $subcategory,
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/{id}", name="app_picto_objets_show", methods={"GET"})
     */
    public function show(PictoObjets $pictoObjet): Response
    {
        return $this->render('picto_objets/show.html.twig', [
            'picto_objet' => $pictoObjet,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_objets_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoObjets $pictoObjet, PictoObjetsRepository $pictoObjetsRepository): Response
    {
        $form = $this->createForm(PictoObjetsType::class, $pictoObjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoObjetsRepository->add($pictoObjet);
            return $this->redirectToRoute('app_picto_objets_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_objets/edit.html.twig', [
            'picto_objet' => $pictoObjet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_objets_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoObjets $pictoObjet, PictoObjetsRepository $pictoObjetsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoObjet->getId(), $request->request->get('_token'))) {
            $pictoObjetsRepository->remove($pictoObjet);
        }

        return $this->redirectToRoute('app_picto_objets_index', [], Response::HTTP_SEE_OTHER);
    }
}
