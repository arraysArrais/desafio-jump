<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceOrderRequest;
use App\Models\ServiceOrders;
use App\Http\Services\ServiceOrderService;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{

    public function __construct(private ServiceOrderService $serviceOrderService)
    {

    }

    /**
 * @OA\Get(
 *     path="/api/service_orders/",
 *     security={{"bearerAuth": {}}},
 *     tags={"Service Orders"},
 *     summary="return Service Orders",
 *     operationId="getAll",
 *     @OA\Parameter(
 *         name="limit",
 *         in="query",
 *         description="limit retrieved records",
 *         required=false,
 *         @OA\Schema(
 *             type="string",
 *         )
 *     ),
 *     @OA\Parameter(
 *         name="page",
 *         in="query",
 *         description="page which you want to navigate to",
 *         required=false,
 *         @OA\Schema(
 *             type="string",
 *         )
 *     ),
 *     @OA\Parameter(
 *         name="placa",
 *         in="query",
 *         description="vehicle plate filter",
 *         required=false,
 *         @OA\Schema(
 *             type="string",
 *         )
 *     ),      
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation"
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unathenticated"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Internal Error"
 *     )
 * )
 */
    public function getAll(Request $r)
    {
        return $this->serviceOrderService->findAll($r);
    }


    /**
     * @OA\Post(
     *     path="/api/service_orders/",
     *     security={{"bearerAuth": {}}},
     *     operationId="createServiceOrder",
     *     tags={"Service Orders"},
     *     summary="create a Service Order record in the database",
     *     
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *      type="object",
     *      @OA\Property(property="vehiclePlate", type="string", example="KXU3255"),
     *      @OA\Property(property="entryDateTime", example="2023-01-01 00:00:00"),
     *      @OA\Property(property="price", type="number", example="10.27"),
     *      @OA\Property(property="user_id", description="id of the user related with this service order record", type="number", example="1"),
     *   ),
     * ),
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *      type="object",
     *      @OA\Property(property="id", type="number", example="1"),
     *      @OA\Property(property="vehiclePlate", type="string", example="KXU3255"),
     *      @OA\Property(property="entryDateTime", example="2023-01-01 00:00:00"),
     *      @OA\Property(property="exitDateTime", example="0001-01-01 00:00:00"),
     *      @OA\Property(property="price", type="number", example="10.27"),
     *      @OA\Property(property="user_id", description="id of the user related with this service order record", type="number", example="1"),
     *   ),
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unathenticated", 
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Invalid data"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Error"
     *     ),
     * ),
     */
    public function create(ServiceOrderRequest $r)
    {

        return $this->serviceOrderService->create($r);
    }
}
