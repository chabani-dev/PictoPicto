<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoSujetsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoSujetsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoSujetsRepository $PictoSujetsRepository
     * @Route("/api/get/pictoSujets", name="api_get_index_sujets_Sujets", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoSujetsRepository $PictoSujetsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoSujetsRepository->findAll(),200,[],['groups'=>'pictosujets']);
    }

}