<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'primary_role',
        'secondary_role',
        'base_hp',
        'base_mana'
    ];
}
