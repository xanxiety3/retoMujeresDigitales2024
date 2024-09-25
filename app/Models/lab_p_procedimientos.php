<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_p_procedimientos extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_cups",
        "id_grupo_laboratorio",
        "metodo"
    ];
    public function grupo()
{
    return $this->belongsTo(lab_p_grupos::class, 'id_grupo_laboratorio');
}

}
