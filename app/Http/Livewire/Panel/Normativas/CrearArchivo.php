<?php

namespace App\Http\Livewire\Panel\Normativas;

use App\Models\Normativa;
use Livewire\Component;
use Livewire\WithFileUploads;
class CrearArchivo extends Component
{
    use WithFileUploads;

    public $pdfs = [];
    public $titulo, $tipo_documento,$archivo; // variables publicas del formularios

    protected $rules = [
        'titulo' => 'required|min:10|max:140',
        'tipo_documento' => 'required',
        'archivo' => 'required|mimes:pdf|max:10240', // Valida que sea un archivo PDF y su tamaño no sea mayor a 10MB
    ];

    public function save()
    {
        $this->validate([
            'titulo' => 'required',
            'tipo_documento' => 'required',
            'archivo' => 'required|mimes:pdf|max:2048', // Valida que sea un archivo PDF y su tamaño no sea mayor a 2MB
        ]);

        $path = $this->archivo->store('pdfs', 'public');

        Normativa::create([
            'titulo' => $this->titulo,
            'tipo_documento' => $this->tipo_documento,
            'archivo' => $path,
        ]);

        $this->reset(['titulo', 'tipo_documento', 'archivo']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
        return redirect()->route('show-archivo');
    }















/*
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
*/
    public function render()
    {
        return view('livewire.panel.normativas.crear-archivo');
    }
}
