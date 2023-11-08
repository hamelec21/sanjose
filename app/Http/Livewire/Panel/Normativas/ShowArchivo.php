<?php

namespace App\Http\Livewire\Panel\Normativas;

use App\Models\Normativa;
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
        return view('livewire.panel.normativas.show-archivo');
    }
}
