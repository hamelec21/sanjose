<?php

namespace App\Http\Livewire\Panel\Normativas;

use App\Models\Normativa;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
class ShowArchivo extends Component
{
    public $search;
    use WithPagination;
    protected $listeners = ['render' => 'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function destroy($id)
    {
        Normativa::destroy($id);
    }

    





    public function render()
    {
        $normas = Normativa::buscar($this->search)
        ->orderBy('id','Desc')
        ->paginate(10);
        return view('livewire.panel.normativas.show-archivo',compact('normas'));
    }
}
