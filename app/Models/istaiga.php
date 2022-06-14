<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class istaiga extends Model
{
    use HasFactory;

    protected $table = "istaigos";
    protected $fillable = [
        'pavadinimas',
        'kodas',
        'adresas',
        'nuotrauka',
    ];
}
