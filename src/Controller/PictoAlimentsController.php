<?php

namespace App\Controller;

use App\Entity\PictoAliments;
use App\Form\PictoAlimentsType;
use App\Repository\PictoAlimentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/aliments")
 */
class PictoAlimentsController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoAlimentsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }
    /**
     * @Route("/", name="app_picto_aliments_index", methods={"GET"})
     */
    public function index(PictoAlimentsRepository $pictoAlimentsRepository): Response
    {
        return $this->render('picto_aliments/index.html.twig', [
            'picto_aliments' => $pictoAlimentsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_picto_aliments_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoAliments();
        $form = $this->createForm(PictoAlimentsType::class,  $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              $category = $form->get('pictograms')->getData();
            $subcategory = $form->get('subcategory_id')->getData();
            if ( $category  && $subcategory) {
                $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_aliments_new');
            } else if (!$category && !$subcategory) {
                $this->addFlash('echec', 'Doit posséder une catégorie ou une sous-catégorie');
                return $this->redirectToRoute('app_picto_aliments_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_aliments_index');
            }
        }
          return $this->render('picto_aliments/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        //     $pictoAlimentsRepository->add($pictoAliment);
        //     return $this->redirectToRoute('app_picto_aliments_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_aliments/new.html.twig', [
        //     'picto_aliment' => $pictoAliment,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_aliments_show", methods={"GET"})
     */
    public function show(PictoAliments $pictoAliment): Response
    {
        return $this->render('picto_aliments/show.html.twig', [
            'picto_aliment' => $pictoAliment,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_aliments_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoAliments $pictoAliment, PictoAlimentsRepository $pictoAlimentsRepository): Response
    {
        $form = $this->createForm(PictoAlimentsType::class, $pictoAliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoAlimentsRepository->add($pictoAliment);
            return $this->redirectToRoute('app_picto_aliments_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_aliments/edit.html.twig', [
            'picto_aliment' => $pictoAliment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_aliments_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoAliments $pictoAliment, PictoAlimentsRepository $pictoAlimentsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoAliment->getId(), $request->request->get('_token'))) {
            $pictoAlimentsRepository->remove($pictoAliment);
        }

        return $this->redirectToRoute('app_picto_aliments_index', [], Response::HTTP_SEE_OTHER);
    }
}
