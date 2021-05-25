<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticies';

    public function categoria() {
        return $this->belognTo(Categoria::class);
    }

    public function autor() {
        return $this->belognTo(Autor::class);
    }
}
