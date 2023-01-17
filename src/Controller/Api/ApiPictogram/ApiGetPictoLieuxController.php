<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoLieuxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoLieuxController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoLieuxRepository $PictoLieuxRepository
     * @Route("/api/get/pictoLieux", name="api_get_index_Lieux", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoLieuxRepository $PictoLieuxRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoLieuxRepository->findAll(),200,[],['groups'=>'pictoLieux']);
    }

}