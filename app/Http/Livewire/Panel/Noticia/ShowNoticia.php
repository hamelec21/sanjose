<?php

namespace App\Http\Livewire\Panel\Noticia;

use App\Models\Noticia;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNoticia extends Component
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
        Noticia::destroy($id);
    }

    public function render()
    {
        $news = Noticia::buscar($this->search)
        ->orderBy('id','Desc')
        ->paginate(5);
        return view('livewire.panel.noticia.show-noticia',compact('news'));
    }

    
}
