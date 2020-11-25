<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Corporativos extends Model
{
        protected $primarykey="id_valores_corporativos";

        protected $table="valores_corporativos";

        public $fillable= [
       'valores',
       'descripcion',
       'id_Planeacion'
        ];

}
