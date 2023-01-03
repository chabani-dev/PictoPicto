<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoAutresMotsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoAutresMotsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoAutresMotsRepository $PictoAutresMotsRepository
     * @Route("/api/get/PictoAutresMots", name="api_get_index_AutresMots", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoAutresMotsRepository $PictoAutresMotsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoAutresMotsRepository->findAll(),200,[],['groups'=>'pictoautresMots']);
    }

}