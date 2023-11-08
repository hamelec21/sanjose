<?php

namespace App\Http\Livewire\Panel\Normativas;

use App\Models\Normativa;
use Livewire\Component;
use Livewire\WithFileUploads;
class CrearArchivo extends Component
{
    use WithFileUploads;

    public $titulo, $tipo_documento,$archivo; // variables publicas del formularios

    protected $rules = [
        'titulo' => 'required|min:10|max:140',
        'tipo_documento' => 'required',
        'archivo'=>'required|max:5120',
    ];

    public function save()
    {
        $this-> validate();
        $archivo = $this->archivo->store('public/documentos');

        Normativa::create([
            'titulo' => $this->titulo,
            'tipo_documento' => $this->tipo_documento,
            'archivo' => $archivo,
        ]);

        $this->reset(['titulo','tipo_documento','archivo']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
        return redirect()->route('show-archivo');
    }
    public function render()
    {
        return view('livewire.panel.normativas.crear-archivo');
    }
}
