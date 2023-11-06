<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'bio', 'profile_picture'];

    public static function getAll()
    {
        return self::all();
    }
}
