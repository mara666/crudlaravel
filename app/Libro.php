<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public $guarded = [];

    public function autor() {
        return $this->belongsTo("App\Autor", "autor_id");
    }
}
