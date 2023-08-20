<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information_site extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'telephone',
        'description',
        'email',
        'address',
    ];
}
