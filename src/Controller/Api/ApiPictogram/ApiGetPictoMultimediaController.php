<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoMultimediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoMultimediaController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoMultimediaRepository $PictoMultimediaRepository
     * @Route("/api/get/pictoMultimedia", name="api_get_index_Multimedia", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoMultimediaRepository $PictoMultimediaRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoMultimediaRepository->findAll(),200,[],['groups'=>'pictoMultimedia']);
    }

}