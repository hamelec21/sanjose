<?php

namespace App\Http\Livewire\Panel\Noticia;

use App\Models\Noticia;
use Livewire\Component;
use Livewire\WithFileUploads;
class CrearNoticia extends Component
{
    use WithFileUploads;

    public $titulo, $contenido,$foto; // variables publicas del formularios

    protected $rules = [
        'titulo' => 'required|min:10|max:120',
        'contenido' => 'required|min:60|max:2500',
        'foto'=>'required',
    ];

    public function save()
    {
        $this-> validate();
        $foto = $this->foto->store('public/imagen_noticia');

        Noticia::create([
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,
            'imagen' => $foto,
        ]);

        $this->reset(['titulo','contenido','foto']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
        return redirect()->route('show-noticia');
    }
    public function render()
    {
        return view('livewire.panel.noticia.crear-noticia');
    }
}
