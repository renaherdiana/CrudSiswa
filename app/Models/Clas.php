<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clas extends Model
{
    protected $table = "clases";
    protected $guarded = [];

    public function user(){
        return $this->hasMany(User::class, 'clas_id');
    }
}
