<?php

namespace App\Http\Livewire\Front;

use App\Models\Comunicado;
use Livewire\Component;

class IndexComunicado extends Component
{
    public function render()
    {
       $comunicados = Comunicado::orderBy('created_at','Desc')->first();
        return view('livewire.front.index-comunicado',compact('comunicados'));
    }
    
}
