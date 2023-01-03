<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoOrientationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoOrientationController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoOrientationRepository $PictoOrientationRepository
     * @Route("/api/get/PictoOrientation", name="api_get_index_Orientation", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoOrientationRepository $PictoOrientationRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoOrientationRepository->findAll(),200,[],['groups'=>'pictoorientation']);
    }

}