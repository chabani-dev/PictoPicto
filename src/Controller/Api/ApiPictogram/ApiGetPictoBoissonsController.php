<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoBoissonsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoBoissonsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoBoissonsRepository $PictoBoissonsRepository
     * @Route("/api/get/PictoBoissons", name="api_get_index_Boissons", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoBoissonsRepository $PictoBoissonsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoBoissonsRepository->findAll(),200,[],['groups'=>'pictoboissons']);
    }

}