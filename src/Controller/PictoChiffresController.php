<?php

namespace App\Controller;

use App\Entity\PictoChiffres;
use App\Form\PictoChiffresType;
use App\Repository\PictoChiffresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/chiffres")
 */
class PictoChiffresController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoChiffresRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="app_picto_chiffres_index", methods={"GET"})
     */
    public function index(PictoChiffresRepository $pictoChiffresRepository): Response
    {
        return $this->render('picto_chiffres/index.html.twig', [
            'picto_chiffres' => $pictoChiffresRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_chiffres_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
       $pictogram = new PictoChiffres();
        $form = $this->createForm(PictoChiffresType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_chiffres_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_chiffres_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_chiffres_index');
            }
        }
          return $this->render('picto_chiffres/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);
        //     $pictoChiffresRepository->add($pictoChiffre);
        //     return $this->redirectToRoute('app_picto_chiffres_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_chiffres/new.html.twig', [
        //     'picto_chiffre' => $pictoChiffre,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_chiffres_show", methods={"GET"})
     */
    public function show(PictoChiffres $pictoChiffre): Response
    {
        return $this->render('picto_chiffres/show.html.twig', [
            'picto_chiffre' => $pictoChiffre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_chiffres_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoChiffres $pictoChiffre, PictoChiffresRepository $pictoChiffresRepository): Response
    {
        $form = $this->createForm(PictoChiffresType::class, $pictoChiffre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoChiffresRepository->add($pictoChiffre);
            return $this->redirectToRoute('app_picto_chiffres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_chiffres/edit.html.twig', [
            'picto_chiffre' => $pictoChiffre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_chiffres_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoChiffres $pictoChiffre, PictoChiffresRepository $pictoChiffresRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoChiffre->getId(), $request->request->get('_token'))) {
            $pictoChiffresRepository->remove($pictoChiffre);
        }

        return $this->redirectToRoute('app_picto_chiffres_index', [], Response::HTTP_SEE_OTHER);
    }
}
