<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceOrders extends Model
{
    use HasFactory;

    protected $table = 'service_orders';

    protected $fillable = [
        'vehiclePlate',
        'entryDateTime',
        'exitDateTime',
        'priceType',
        'price',
        'user_id'
    ];

    protected $hidden = [
        // 'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
