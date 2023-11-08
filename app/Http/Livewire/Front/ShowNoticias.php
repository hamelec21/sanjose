<?php

namespace App\Http\Livewire\Front;

use App\Models\Noticia;
use Livewire\Component;

class ShowNoticias extends Component
{
    

    public function render()
    {
        $noticias = Noticia::all();
        return view('livewire.front.show-noticias',compact('noticias'));
    }
}
