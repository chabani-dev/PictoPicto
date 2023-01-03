<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoSportsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoSportsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoSportsRepository $PictoSportsRepository
     * @Route("/api/get/PictoSports", name="api_get_index_Sports", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoSportsRepository $PictoSportsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoSportsRepository->findAll(),200,[],['groups'=>'pictosports']);
    }

}