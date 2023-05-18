<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoAdjectifsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoAdjectifsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoAdjectifsRepository $PictoAdjectifsRepository
     * @Route("/api/get/pictoAdjectifs", name="api_get_index_Adjectifs", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoAdjectifsRepository $PictoAdjectifsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoAdjectifsRepository->findAll(),200,[],['groups'=>'pictoAdjectifs']);
    }

}