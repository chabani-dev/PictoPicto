<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoFormesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoFormesController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoFormesRepository $PictoFormesRepository
     * @Route("/api/get/pictoFormes", name="api_get_index_Formes", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoFormesRepository $PictoFormesRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoFormesRepository->findAll(),200,[],['groups'=>'pictoFormes']);
    }

}