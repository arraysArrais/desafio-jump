<?php

namespace App\Http\Services;

use App\Http\Requests\ServiceOrderRequest;
use App\Models\ServiceOrders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

use function PHPUnit\Framework\isEmpty;

class ServiceOrderService
{
    public function findAll(Request $r)
    {
        try {

            $r->limit = (!$r->exists('limit')) ? 0 : $r->limit;

            if ($r->exists('placa')) {
                $result = ServiceOrders::where('vehiclePlate', $r->placa)->paginate($r->limit)->toArray();
                return $result['data'];
            }

            $result = ServiceOrders::with('user')->paginate($r->limit)->toArray();
            return $result['data'];
            
        } catch (Throwable $e) {
            return response()->json([
                'error' => 'Internal error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function create(ServiceOrderRequest $r)
    {

        try {
            $newServiceOrder = [
                'vehiclePlate' => $r->vehiclePlate,
                'entryDateTime' => $r->entryDateTime,
                'exitDateTime' => $r->exitDateTime,
                'priceType' => $r->priceType,
                'price' => $r->price,
                'user_id' => $r->user_id,
            ];

            $newServiceOrder['exitDateTime'] = empty($newServiceOrder['exitDateTime']) ? '0001-01-01 00:00:00' : $newServiceOrder['exitDateTime'];

            ServiceOrders::create($newServiceOrder);

            return response()->json([
                DB::table('service_orders')->latest()->get()->first()
            ], 201);
        } catch (Throwable $e) {
            return response()->json([
                'error' => 'Internal error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
