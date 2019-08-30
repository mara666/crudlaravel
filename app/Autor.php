<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public $guarded = [];

    public function libros() {
        return $this->hasMany("App\Libro", "autor_id");
    }
}
