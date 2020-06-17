<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hechizo extends Model
{
    protected $fillable = ['trucos', 'nivel1', 'nivel2', 'nivel3', 'nivel4', 'nivel5', 'nivel6', 'nivel7', 'nivel8', 'nivel9'];
    public $timestamps = false;
}
