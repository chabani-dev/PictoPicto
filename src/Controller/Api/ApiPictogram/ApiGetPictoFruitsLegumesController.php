<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoFruitsLegumesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoFruitsLegumesController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoFruitsEtLegumesRepository $PictoFruitsEtLegumesRepository
     * @Route("/api/get/pictoFruitsEtLegumes", name="api_get_index_FruitsEtLegumes", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoFruitsLegumesRepository $PictoFruitsLegumesRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoFruitsLegumesRepository->findAll(),200,[],['groups'=>'pictoFruitsLegumes']);
    }

}