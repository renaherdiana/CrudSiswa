<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = "clases"; // nama tabel
    protected $guarded = [];     // semua field bisa diisi

    public function users()
    {
        return $this->hasMany(User::class, 'clas_id');
    }
}
