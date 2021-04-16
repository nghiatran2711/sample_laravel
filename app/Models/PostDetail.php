<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    use HasFactory;
    // protected $table='post_details';
    protected $primaryKey='id';
    protected $fillable=[
        'content',
        'post_id'
    ];
    public function post(){
        return $this->belongsTo(Post::class);
    }

}
