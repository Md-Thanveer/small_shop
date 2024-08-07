<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;



class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items'; // Define the table name if it's different from the class name

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'qty',
        'price',
        'amount',
        'discount',
        // Add other fillable attributes here
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_number');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
