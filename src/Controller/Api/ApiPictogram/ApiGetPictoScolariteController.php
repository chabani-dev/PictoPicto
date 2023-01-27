<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoScolariteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoScolariteController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoScolariteRepository $PictoScolariteRepository
     * @Route("/api/get/pictoScolarite", name="api_get_index_Scolarite", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoScolariteRepository $PictoScolariteRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoScolariteRepository->findAll(),200,[],['groups'=>'pictoScolarite']);
    }

}