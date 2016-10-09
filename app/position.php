<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function machines()
    {
    	return $this->hasone(machine::class);
    }
}