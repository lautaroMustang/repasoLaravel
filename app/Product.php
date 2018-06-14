<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'cost', 'profit_margin', 'category_id', 'fotopath'];
    public function getPrice()
    {
      return $this->cost + ($this->cost*$this->profit_margin/100);
    }
}
