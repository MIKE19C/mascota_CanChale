<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    //
    protected $table='propietarios';
    protected $primaryKey='id_propietario';
    public $with=['mascotas'];

    // define si la llave primaria es o no es un numero autoincrementable
    public $incrementing=true;
    // activar o desactivar etiquetas de tiempo
    public $timestamps=false;

    public $fillable=[
    	'id_propietario',
    	'nombre',
    	'primer_apellido',
    	'segundo_apellido',
    	'celular',
    	'calle',
    	'colonia',
    	'numint',
    	'localidad',
    	'genero'
    ];


    public function mascotas(){
    	return $this->hasMany(Mascota::class,'id_propietario','id_propietario');
    }
}
