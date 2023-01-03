<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoInterrogatifRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoInterrogatifController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoInterrogatifRepository $PictoInterrogatifRepository
     * @Route("/api/get/PictoInterrogatif", name="api_get_index_Interrogatif", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoInterrogatifRepository $PictoInterrogatifRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoInterrogatifRepository->findAll(),200,[],['groups'=>'pictointerrogatif']);
    }

}