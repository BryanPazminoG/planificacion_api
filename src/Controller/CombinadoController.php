<?php

namespace App\Controller;

use App\Repository\CombinadoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CombinadoController extends AbstractController
{
    /**
     * @Route("/combinado", name="app_combinado")
     */


    public function index(CombinadoRepository $combinadoRepository): JsonResponse
    {
        // Obtén todas las predicciones desde el repositorio
        $predicciones = $combinadoRepository->findAll();

        // Convierte las entidades en un array asociativo
        $data = [];
        foreach ($predicciones as $prediccion) {
            $data[] = [
                'DEPARTAMENTO' => $prediccion->getDepartamento(),
                'CAMPUS' => $prediccion->getCampus(),
                'AREA_CONOCIMIENTO' => $prediccion->getAreaConocimiento(),
                'CODIGO ASIGNATURA' => $prediccion->getCodigoAsignatura(),
                'NRC' => $prediccion->getNrc(),
                'STATUS' => $prediccion->getStatus(),
                'NUM_EST' => $prediccion->getNumEst(),
                'HI' => $prediccion->getHI(),
                'HF' => $prediccion->getHF(),
                'L' => $prediccion->getL(),
                'M' => $prediccion->getM(),
                'I' => $prediccion->getI(),
                'J' => $prediccion->getJ(),
                'V' => $prediccion->getV(),
                'HORA_DIA' => $prediccion->getHoraDia(),
                'NUM_DIAS' => $prediccion->getNumDias(),
                'HORAS' => $prediccion->getHoras(),
                'TIPO' => $prediccion->getTipo(),
                'PERIODO' => $prediccion->getPeriodo(),
                'OBSERVACION' => $prediccion->getObservacion(),
            ];
        }

        // Devuelve una respuesta JSON
        return $this->json($data);
    }
    


}
