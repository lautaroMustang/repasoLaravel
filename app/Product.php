<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'cost', 'profit_margin', 'category_id', 'fotopath'];
  //protected $guarded = [ " columnasProhibidas" ];
    public function getPrice()
    {
      return $this->cost + ($this->cost*$this->profit_margin/100);
    }

    public function category()
    {
      return $this->belongsTo('\App\Category','category_id','id');
      // >El orden de parametros es:
      // >
      //       1. Modelo de los datos que se van a traer
      //       2. Foreign Key de ese modelo apuntando al actual
      //       3. Primary Key del modelo actual
    }
    public function properties()
    {
      return $this->belongsToMany('\App\Property','product_property','product_id','property_id');
      // 1. Modelo de los datos que se van a traer
      // 2. Tabla que une a ambos modelos
      // 3. Foreign Key del modelo actual
      // 4. Foreign Key del otro modelo
    }
}
