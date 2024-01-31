<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class works_apps extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'name',
        'review_count',
        'description'
    ];
}
