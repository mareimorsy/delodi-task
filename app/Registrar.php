<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'governorate', 'area', 'university', 'graduation_year', 'profession', 'profession', 'specialization', 'notes'
    ];
}
