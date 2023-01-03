<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoEmotionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoEmotionsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoEmotionsRepository $PictoEmotionsRepository
     * @Route("/api/get/PictoEmotions", name="api_get_index_Emotions", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoEmotionsRepository $PictoEmotionsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoEmotionsRepository->findAll(),200,[],['groups'=>'pictoemotions']);
    }

}