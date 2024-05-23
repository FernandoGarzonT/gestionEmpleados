<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombres","apellidos","cedula","email", "numeroCelular",
        "fechaContratacion","fechaDesvinculacion"
    ];


    public function department(){
        return $this->belongsTo(Department::class);
    }

}
