<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Table name (optional kasi auto-detect na 'students')
    protected $table = 'students';

    // Fields na puwedeng i‑mass assign (gagamitin sa create/update)
    protected $fillable = [
        'name',
        'course',
        'year_level',
        'age',
    ];
}
