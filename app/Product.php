<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getPrice()
    {
      return $this->cost + ($this->cost*$this->profit_margin/100);
    }
}
