<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'link', 'chanel', 'kategori', 'foto'
    ];
    
    public function setFotoAttribute($value)
    {
        $this->attributes['foto'] =time().$value->getClientOriginalName();

    }
}
