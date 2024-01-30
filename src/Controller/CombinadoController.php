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

    public function index(Request $request, CombinadoRepository $combinadoRepository): JsonResponse
    {
        $batchSize = 1000; // Set the batch size according to your needs
        $offset = 0;

        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');

        while ($batch = $combinadoRepository->findBy([], null, $batchSize, $offset)) {
            foreach ($batch as $prediccion) {
                $data[] = [
                    'ID' => $prediccion->getId(),
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

            $response->setContent(json_encode($data));
            $response->send();

            // Clear the data array to free up memory
            unset($data);

            // Increment the offset for the next batch
            $offset += $batchSize;
        }

        return $response;
    }

    


}
