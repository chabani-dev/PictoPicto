<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoMeteoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoMeteoController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoMeteoRepository $PictoMeteoRepository
     * @Route("/api/get/pictoMeteo", name="api_get_index_Meteo", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoMeteoRepository $PictoMeteoRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoMeteoRepository->findAll(),200,[],['groups'=>'pictoMeteo']);
    }

}