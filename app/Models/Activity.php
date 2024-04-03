<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    // Define explícitamente el nombre de la tabla

    protected $table = 'activity_logs'; // Asegúrate de reemplazar 'activities' con el nombre real de tu tabla

    protected $fillable = [
        'user_id',
        'info_id',
        'action',
        'details',
    ];
}
