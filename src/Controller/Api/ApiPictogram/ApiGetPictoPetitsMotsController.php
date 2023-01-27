<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoPetitsMotsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoPetitsMotsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoPetitsMotsRepository $PictoPetitsMotsRepository
     * @Route("/api/get/pictoPetitsMots", name="api_get_index_PetitsMots", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoPetitsMotsRepository $PictoPetitsMotsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoPetitsMotsRepository->findAll(),200,[],['groups'=>'pictoPetitsMots']);
    }

}