<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\PictoActions;
use App\Entity\Therapist;
use App\Form\PictoActionsType;
use App\Repository\CategoryRepository;
use App\Repository\PictoActionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/picto/actions")
 */
class PictoActionsController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoActionsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }
    
    /**
     * @Route("/", name="app_picto_actions_index", methods={"GET"})
     */
    public function index(PictoActionsRepository $pictoActionsRepository ,CategoryRepository $category): Response

    {
        $category=$this->repository->find(3);
        return $this->render('picto_actions/index.html.twig', [
            'picto_actions' => $pictoActionsRepository->findAll(),
            'category' => $category
             
        ]);
    }

    /**
     * @Route("/new", name="app_picto_actions_new", methods={"GET", "POST"})
     */
   
     public function addPictogram(Request $request): Response
    {
        $pictogram = new PictoActions();
        $form = $this->createForm(PictoActionsType::class, $pictogram);
        $form->handleRequest($request);

        $therapistId=$this->em->getRepository(Therapist::class)->find($this->getUser()->getId());
        //$pictogram->setTherapist($therapistId);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->get('pictograms')->getData();
            // $subcategory = $form->get('subcategory_id')->getData();
         

            // if ( $category  && $subcategory) {
            //     $this->addFlash('echec', 'Ne peut avoir qu\'une catégorie ou une sous-catégorie');
            //     return $this->redirectToRoute('app_picto_actions_new');
            } if (!$category ) {
                $this->addFlash('echec', 'Doit posséder une catégorie ');
                return $this->redirectToRoute('app_picto_actions_new');
            } else {
                $pictogram = $form->getData();
                $this->em->persist($pictogram);
                $this->em->flush();
                $this->addFlash('success', 'Pictogramme créé avec succès');
                return $this->redirectToRoute('app_picto_picto');
            }
        
        return $this->render('picto_actions/new.html.twig', [
            'pictograms' => $pictogram,
            'form' => $form->createView(),
            
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_actions_show", methods={"GET"})
     */
    public function show(PictoActions $pictoAction): Response
    {
        return $this->render('picto_actions/show.html.twig', [
            'picto_action' => $pictoAction,
    
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_picto_actions_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PictoActions $pictoAction, PictoActionsRepository $pictoActionsRepository): Response
    {
        $form = $this->createForm(PictoActionsType::class, $pictoAction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictoActionsRepository->add($pictoAction);
            return $this->redirectToRoute('app_picto_actions_index', [], Response::HTTP_SEE_OTHER);
        } 
    
        return $this->render('picto_actions/edit.html.twig', [
            'picto_action' => $pictoAction,
            'form' => $form->createView(),
             
        ]);
    }

    /**
     * @Route("/{id}", name="app_picto_actions_delete", methods={"POST"})
     */
    public function delete(Request $request, PictoActions $pictoAction, PictoActionsRepository $pictoActionsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pictoAction->getId(), $request->request->get('_token'))) {
            $pictoActionsRepository->remove($pictoAction);
        }

        return $this->redirectToRoute('app_picto_actions_index', [], Response::HTTP_SEE_OTHER);
    }
}
