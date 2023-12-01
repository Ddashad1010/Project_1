<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable
    =[
        'user_id',
        'product_id',
        'description',
        'amount',
        'total',
        'users',
        'products',
    ];
    /** 
    *
    *@return \Illuminate\Database\Eloquent\Relations\BelongsTo\
    */
    public function user()
    {
        return $this ->belongsTo(User::class);
    }
    public function product()
    {
        return $this ->belongsTo(Product::class);
    }
}

