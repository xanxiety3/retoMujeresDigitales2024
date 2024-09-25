<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_p_identificacion extends Model
{
    use HasFactory;
    protected $fillable=[
        "tipo"
    ];
public function personas()
    {
        return $this->hasMany(gen_m_persona::class, 'id_tipoid');
    }


}
