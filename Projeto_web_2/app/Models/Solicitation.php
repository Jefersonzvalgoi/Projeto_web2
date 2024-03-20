<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'solicitation_title',
        'solicitation_date',
        'solicitation_description',
        'solicitation_classification'
    ];
}
