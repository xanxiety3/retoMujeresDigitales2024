<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sex_p_lista extends Model
{
    use HasFactory;
    protected $fillable=[
        "sexobiologico"
    ];
    public function personas()
    {
        return $this->hasMany(gen_m_persona::class, 'id_sexobiologico');
    }
}
