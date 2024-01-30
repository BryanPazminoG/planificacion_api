<?php

namespace App\Controller;

use App\Repository\PrediccionesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrediccionesController extends AbstractController
{
    /**
     * @Route("/predicciones", name="app_predicciones")
     */
    public function index(PrediccionesRepository $prediccionRepository): JsonResponse
    {
        // Obtén todas las predicciones desde el repositorio
        $predicciones = $prediccionRepository->findAll();

        // Convierte las entidades en un array asociativo
        $data = [];
        foreach ($predicciones as $prediccion) {
            $data[] = [
                'CAMPUS' => $prediccion->getCampus(),
                'DEPARTAMENTO' => $prediccion->getDepartamento(),
                'ASIGNATURA' => $prediccion->getAsignatura(),
                'CODIGO' => $prediccion->getCodigo(),
                'AREA_CONOCIMIENTO' => $prediccion->getAreaConocimiento(),
                'CODIGO_ASIGNATURA' => $prediccion->getCodigoAsignatura(),
                'ESTUDIANTES_RL' => round($prediccion->getEstudiantesRl()),
                'ESTUDIANTES_SE' => round($prediccion->getEstudiantesSE()),
                'ESTUDIANTES_AD' => round($prediccion->getEstudiantesAD()),
                'NRC_RL' => round($prediccion->getNRCRL()),
                'NRC_SE' => round($prediccion->getNRCSE()),
                'NRC_AD' => round($prediccion->getNRCAD()),
                'HORAS_RL' => round($prediccion->getHORASRL()),
                'HORAS_SE' => round($prediccion->getHORASSE()),
                'HORAS_AD' => round($prediccion->getHORASAD()),
                'OBSERVACION' => $prediccion->getObservacionRl()
            ];
        }

        // Devuelve una respuesta JSON
        return $this->json($data);
    }
}
