<?php

namespace App\Http\Livewire\Front;

use App\Models\Noticia;
use Livewire\Component;

class IndexResumenNoticias extends Component
{
    public function render()
    {

        $noticias = Noticia::orderBy('created_at','Desc')
          ->  take(4)->get();
        return view('livewire.front.index-resumen-noticias',compact('noticias'));
    }
}
