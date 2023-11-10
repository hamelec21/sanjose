<?php

namespace App\Http\Livewire\Front;

use App\Models\Normativa;
use Livewire\Component;

class ShowCuentaPublica extends Component
{
    public function render()
    {
        $cuentas = Normativa::where('tipo_documento','cuenta publica')
        ->orderBy('created_at','Desc')
        ->get();
        return view('livewire.front.show-cuenta-publica',compact('cuentas'));
    }
}
