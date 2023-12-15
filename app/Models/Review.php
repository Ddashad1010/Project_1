<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable
    =[
        'reviews',
        'id_user',
        'id_product',
        'text',
        'title',
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
