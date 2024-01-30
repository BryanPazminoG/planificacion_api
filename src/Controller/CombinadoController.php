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
        // // Obtén el número de página de la solicitud
        // $pagina = $request->query->getInt('pagina', 1); // Si no se proporciona, asume la página 1

        // // Configura el número de elementos por página (en este caso, 3000)
        // $elementosPorPagina = 3000;

        // // Calcula el desplazamiento basado en la página actual
        // $desplazamiento = ($pagina - 1) * $elementosPorPagina;

        // // Obtén los resultados paginados desde el repositorio
        // $predicciones = $combinadoRepository->findBy([], null, $elementosPorPagina, $desplazamiento);

        $predicciones = $combinadoRepository->findAll();

        // Convierte las entidades en un array asociativo
        $data = [];
        foreach ($predicciones as $prediccion) {
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

        // Devuelve una respuesta JSON
        return $this->json($data);
    }


}
