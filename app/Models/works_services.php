<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class works_services extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'services',
    ];
}
