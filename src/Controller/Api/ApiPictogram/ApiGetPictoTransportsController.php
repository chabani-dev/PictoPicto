<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoTransportsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoTransportsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoTransportsRepository $PictoTransportsRepository
     * @Route("/api/get/PictoTransports", name="api_get_index_Transports", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoTransportsRepository $PictoTransportsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoTransportsRepository->findAll(),200,[],['groups'=>'pictotransports']);
    }

}