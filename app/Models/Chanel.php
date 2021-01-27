<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'description', 'chanel', 'id_category', 'img'
    ];
    
    public function setFotoAttribute($value)
    {
        $this->attributes['image'] =time().$value->getClientOriginalName();

    }
}
