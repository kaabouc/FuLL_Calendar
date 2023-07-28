<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description_event',
        'start_datetime',
        'end_datetime',
        'role',
        
    ];
    public function categorie(){ 
        return $this->belongsTo('App\Models\categorie');
    }
}
