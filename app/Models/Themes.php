<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use HasFactory;
    protected $table = 'themes';
    protected $fillable = [
        'dark_color',
        'light_color',
        'accent_color',
        'active_color'
    ];
}
