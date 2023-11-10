<?php

namespace App\Http\Livewire\Front;

use App\Models\Normativa;
use Livewire\Component;

class ShowUtilesEscolares extends Component
{
    public function render()
    {
        $utiles =Normativa::where('tipo_documento','utiles')
        ->orderBy('id','Desc')
        ->get();
        return view('livewire.front.show-utiles-escolares',compact('utiles'));
    }
}
