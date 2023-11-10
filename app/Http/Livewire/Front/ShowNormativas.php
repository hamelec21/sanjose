<?php

namespace App\Http\Livewire\Front;

use App\Models\Normativa;
use Livewire\Component;
use WithPagination;

class ShowNormativas extends Component
{
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $normativas =Normativa::where('tipo_documento','normativa o reglamento')
        ->orderBy('id','Desc')
        ->get();
       // dd($normativas);
        return view('livewire.front.show-normativas',compact('normativas'));
    }
}
