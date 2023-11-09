<?php

namespace App\Http\Livewire\Panel\Normativas;

use App\Models\Normativa;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EditarArchivo extends Component
{
    public $normativaId;
    public $titulo;
    public $tipo_documento;
    public $archivo;

    public function mount($id)
    {
        $normativa = Normativa::find($id);

        if (!$normativa) {
            return redirect()->route('show-archivo')->with('error', 'Registro de Normativa no encontrado.');
        }

        $this->normativaId = $normativa->id;
        $this->titulo = $normativa->titulo;
        $this->tipo_documento = $normativa->tipo_documento;
    }

    public function render()
    {
        return view('livewire.panel.normativas.editar-archivo');
    }

    public function update()
    {
        $this->validate([
            'titulo' => 'required',
            'tipo_documento' => 'required',
        ]);

        $normativa = Normativa::find($this->normativaId);

        if (!$normativa) {
            return redirect()->route('show-archivo')->with('error', 'Registro de Normativa no encontrado.');
        }

        $normativa->titulo = $this->titulo;
        $normativa->tipo_documento = $this->tipo_documento;

        if ($this->archivo) {
            $this->validate([
                'archivo' => 'mimes:pdf|max:2048', // Valida que sea un archivo PDF y su tamaño no sea mayor a 2MB
            ]);

            // Elimina el archivo anterior si se cambia
            if ($normativa->archivo) {
                Storage::delete('public/' . $normativa->archivo);
            }

            $path = $this->archivo->store('pdfs', 'public');
            $normativa->archivo = $path;
        }

        $normativa->save();

        return redirect()->route('show-archivo')->with('success', 'Registro de Normativa actualizado con éxito.');
    }
}



