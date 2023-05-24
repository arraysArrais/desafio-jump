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

    public function create(ServiceOrderRequest $r, ServiceOrderService $ServiceOrder)
    {

        return $ServiceOrder->create($r);
    }
}
