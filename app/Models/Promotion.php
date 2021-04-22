<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'discount',
        'begin_date',
        'end_date',
        'product_id'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
