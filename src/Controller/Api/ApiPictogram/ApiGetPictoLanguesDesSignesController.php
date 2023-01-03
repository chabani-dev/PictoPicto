<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoLanguesDesSignesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoLanguesDesSignesController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoLanguesDesSignesRepository $PictoLanguesDesSignesRepository
     * @Route("/api/get/PictoLanguesDesSignes", name="api_get_index_LanguesDesSignes", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoLanguesDesSignesRepository $PictoLanguesDesSignesRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoLanguesDesSignesRepository->findAll(),200,[],['groups'=>'pictolanguesdesSignes']);
    }

}