<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceOrderRequest;
use App\Models\ServiceOrders;
use App\Http\Services\ServiceOrderService;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    public function getAll(Request $r, ServiceOrderService $ServiceOrder)
    {
        return $ServiceOrder->findAll($r);
    }

    public function create(ServiceOrderRequest $r)
    {

        $newServiceOrder = [
            'vehiclePlate' => $r->vehiclePlate,
            'entryDateTime' => $r->entryDateTime,
            'exitDateTime' => $r->exitDateTime,
            'priceType' => $r->priceType,
            'price' => $r->price,
            'user_id' => $r->user_id,
        ];

        ServiceOrders::create($newServiceOrder);
    }
}
