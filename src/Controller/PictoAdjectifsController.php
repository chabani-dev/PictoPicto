<?php

namespace App\Controller;

use App\Entity\PictoAdjectifs;
use App\Form\PictoAdjectifsType;
use App\Repository\CategoryRepository;
use App\Repository\PictoAdjectifsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picto/adjectifs")
 */
class PictoAdjectifsController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    
    /**
     * @var EntityManagerInterface
     */
    private $em;


    public function __construct(PictoAdjectifsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }


    /**
     * @Route("/", name="app_picto_adjectifs_index", methods={"GET"})
     */
    public function index(PictoAdjectifsRepository $pictoAdjectifsRepository,CategoryRepository $category): Response
    {
         $category=$this->repository->findByName(['name' => 'Adjectifs']);
        return $this->render('picto_adjectifs/index.html.twig', [
            'picto_adjectifs' => $pictoAdjectifsRepository->findAll(),
            'category' => $category
        ]);
    }

    /**
     * @Route("/new", name="app_picto_adjectifs_new", methods={"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $pictogram = new PictoAdjectifs();
        $form = $this->createForm(PictoAdjectifsType::class, $pictogram);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $category = $form->get('pictograms')->getData();
            if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie');
                return $this->redirectToRoute('app_picto_adjectifs_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        }
          return $this->render('picto_adjectifs/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);

        // }
        //     $pictoAdjectifsRepository->add($pictoAdjectif);
        //     return $this->redirectToRoute('app_picto_adjectifs_index', [], Response::HTTP_SEE_OTHER);
        // }

        // return $this->render('picto_adjectifs/new.html.twig', [
        //     'picto_adjectif' => $pictoAdjectif,
        //     'form' => $form->createView(),
        // ]);
    }

    /**
     * @Route("/{id}", name="app_picto_adjectifs_show", methods={"GET"})
     */
    public function show(PictoAdjectifs $pictoAdjectif): Response
    {
        return $this->render('picto_adjectifs/show.html.twig', [
            'picto_adjectif' => $pictoAdjectif,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_adjectifs_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoAdjectifs $pictoAdjectif, PictoAdjectifsRepository $pictoAdjectifsRepository): Response
    {
        $form = $this->createForm(PictoAdjectifsType::class, $pictoAdjectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoAdjectifsRepository->add($pictoAdjectif);
            return $this->redirectToRoute('app_picto_adjectifs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('picto_adjectifs/edit.html.twig', [
            'picto_adjectif' => $pictoAdjectif,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_adjectifs_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoAdjectifs $pictoAdjectif, PictoAdjectifsRepository $pictoAdjectifsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoAdjectif->getId(), $request->request->get('_token'))) {
            $pictoAdjectifsRepository->remove($pictoAdjectif);
        }

        return $this->redirectToRoute('app_picto_adjectifs_index', [], Response::HTTP_SEE_OTHER);
    }
}
