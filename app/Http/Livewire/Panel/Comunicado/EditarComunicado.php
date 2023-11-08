<?php

namespace App\Http\Livewire\Panel\Comunicado;

use App\Models\Comunicado;
use Livewire\Component;

class EditarComunicado extends Component
{
    public $comunico;
    public $titulo,$contenido; // variables publicas del formularios
    protected $rules =[
        'comunico.titulo' => 'required',
        'comunico.contenido' => 'required',
    ];
    public function mount(Comunicado $comunico )
    {
        $this->comunico = $comunico;
    }
    public function save()
    {
        $this->comunico->save();
        $this->reset(['titulo','contenido']);
        $this->emit('render');
        $this->emit('editar'); //mensaje
        return redirect()->route('show-comunicado');

    }

    public function render()
    {
        return view('livewire.panel.comunicado.editar-comunicado');
    }
}
