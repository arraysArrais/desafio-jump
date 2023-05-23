<?php

namespace App\Http\Services;

use App\Models\ServiceOrders;
use Illuminate\Http\Request;

class ServiceOrderService
{
    public function findAll(Request $r)
    {
        if ($r->exists('limit')) {
            if($r->exists('placa')){
                $placa = $r->placa;
                return ServiceOrders::where('vehiclePlate', $placa)->get();
            }
            $result = ServiceOrders::with('user')->paginate($r->limit)->toArray();
            return $result['data'];
        }
        else{
            return ServiceOrders::with('user')->get();
        }
    }
}
