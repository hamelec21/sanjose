<?php

namespace App\Http\Livewire\Panel\Comunicado;

use App\Models\Comunicado;
use Livewire\Component;

class CrearComunicado extends Component
{
    public $titulo,$contenido ;// variables publicas del formularios

    protected $rules = [
        'titulo' => 'required|min:10|max:45',
        'contenido' => 'required',
    ];

    public function save()
    {
        $this-> validate();
        Comunicado::create([
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,
        ]);

        $this->reset(['titulo','contenido']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
        return redirect()->route('show-comunicado');
    }











    public function render()
    {
        return view('livewire.panel.comunicado.crear-comunicado');
    }
}
