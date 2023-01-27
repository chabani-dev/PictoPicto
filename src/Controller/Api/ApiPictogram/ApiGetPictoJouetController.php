<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoJouetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoJouetController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoJouetRepository $PictoJouetRepository
     * @Route("/api/get/pictoJouet", name="api_get_index_Jouet", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoJouetRepository $PictoJouetRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoJouetRepository->findAll(),200,[],['groups'=>'pictoJouet']);
    }

}