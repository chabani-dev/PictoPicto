<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoCouvertsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoCouvertsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoCouvertsRepository $PictoCouvertsRepository
     * @Route("/api/get/PictoCouverts", name="api_get_index_Couverts", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoCouvertsRepository $PictoCouvertsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoCouvertsRepository->findAll(),200,[],['groups'=>'pictocouverts']);
    }

}