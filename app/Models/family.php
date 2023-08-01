<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name_famile',
        'Adress_famile',
        'Tell_fixe',
        
        'Image_famile',
        'Email_famile',
        
    ];

    public function user(){ 
        return $this->hasMany('App\Models\User');
    }

}
