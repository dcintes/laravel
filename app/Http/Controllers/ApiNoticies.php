<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class ApiNoticies extends Controller
{
    private $elements_page = 10;

    public function noticies($page){
        $skip = ($page -1) * $this->elements_page;
        return Noticia::skip($skip)->take($this->elements_page)->get();
    }

    public function noticia($id){
        return Noticia::findOrFail($id);
    }

    public function categoria($id,$page){
        $skip = ($page -1) * $this->elements_page;
        return Noticia::where('categoria_id', $id)->skip($skip)->take($this->elements_page)->get();
    }

    public function autor($id,$page){
        $skip = ($page -1) * $this->elements_page;
        return Noticia::where('autor_id', $id)->skip($skip)->take($this->elements_page)->get();
    }
}
