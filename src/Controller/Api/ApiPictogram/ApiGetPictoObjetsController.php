<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoObjetsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoObjetsController extends AbstractController
{
    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoObjetsRepository $PictoObjetsRepository
     * @Route("/api/get/pictoObjets", name="api_get_index_Objets", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoObjetsRepository $PictoObjetsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoObjetsRepository->findAll(),200,[],['groups'=>'pictoObjets']);
    }

}