<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
     protected $fillable = [ /* escribimos los campos que queremos permitir que se guarden en la base de datos */
        'name', 
        'slug',
        'surName', 
        'userName', 
        'password',
        'email', 
        'phone', 
        'seccion'] ;

    /* protected $guarded = [];     */ /* escribimos los campos que no queremos que se guarden (campos protegidos).(en caso de usuario malicioso que intente modificar algo desde fuera) */


    public function getRouteKeyName()
    {
        return 'slug';
    }

}