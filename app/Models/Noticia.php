<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'slug', 'imgurl', 'body', 'active', 'fecha', 'categoria_id', 'user_id'];

    public function user(){
        $this->belongsTo(User::class, 'user_id');
    }
}
