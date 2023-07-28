<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'description_categorie',
        
    ];

    public function event(){ 
        return $this->hasMany('App\Models\event');
    }
    
}
