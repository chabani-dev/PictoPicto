<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoFruitsLegumesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoFruitsLegumesController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoFruitsLegumesRepository $PictoFruitsLegumesRepository
     * @Route("/api/get/PictoFruitsLegumes", name="api_get_index_FruitsLegumes", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoFruitsLegumesRepository $PictoFruitsLegumesRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoFruitsLegumesRepository->findAll(),200,[],['groups'=>'pictofruitslegumes']);
    }

}