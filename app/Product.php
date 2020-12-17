<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    

    public function getPrice()
    {
    	$price = $this->price * 1;

    	return number_format($price, 2, ',','') . ' XOF';
    }
}
