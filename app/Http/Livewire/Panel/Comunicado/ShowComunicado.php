<?php

namespace App\Http\Livewire\Panel\Comunicado;

use App\Models\Comunicado;
use Livewire\Component;
use Livewire\WithPagination;
class ShowComunicado extends Component
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
        Comunicado::destroy($id);
    }

    //crear una funcion para eliminado automatico

    public function render()
    {
        $comunicados = Comunicado::buscar($this->search)
        ->orderBy('id','Desc')
        ->paginate(5);
        return view('livewire.panel.comunicado.show-comunicado',compact('comunicados'));
    }
}
