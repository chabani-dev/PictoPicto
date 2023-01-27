<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoSecuriteRoutiereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoSecuriteRoutiereController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoSecuriteRoutiereRepository $PictoSecuriteRoutiereRepository
     * @Route("/api/get/pictoSecuriteRoutiere", name="api_get_index_SecuriteRoutiere", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoSecuriteRoutiereRepository $PictoSecuriteRoutiereRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoSecuriteRoutiereRepository->findAll(),200,[],['groups'=>'pictoSecuriteRoutiere']);
    }

}