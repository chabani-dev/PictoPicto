<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoComportementsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoComportementsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoComportementsRepository $PictoComportementsRepository
     * @Route("/api/get/PictoComportements", name="api_get_index_Comportements", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoComportementsRepository $PictoComportementsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoComportementsRepository->findAll(),200,[],['groups'=>'pictocomportements']);
    }

}