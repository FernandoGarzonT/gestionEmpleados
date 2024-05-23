<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombreDepartamento","nombrePuesto","descripcion"
    ];

    //Relation one to many
    public function employees(){
        return $this->hasMany(Employee::class);
    }

}
