<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDestinasi extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return'slug';
    }
}
