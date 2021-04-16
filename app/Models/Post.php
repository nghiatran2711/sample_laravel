<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $primaryKey='id';
    protected $fillable=[
        'post_name',
        'category_id',
        'thumbnail'
    ];
    public $timestamps = false;
    public function category(){
        // return $this->belongsTo(Category::class,'category_id','id');
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function post_detail(){
        return $this->hasOne(PostDetail::class);
    }
}
