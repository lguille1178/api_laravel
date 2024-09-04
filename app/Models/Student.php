<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ["name", "age"]; // esto nos da los archivos que son asignable 
    //y utilizables en masa
    //protected $table = 'students'; // con este comando podemos asignar la tabla que responde al modelol.
    //no es necesario cuando seguimos las conveciones 
}
