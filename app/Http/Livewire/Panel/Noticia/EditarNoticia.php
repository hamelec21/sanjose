<?php

namespace App\Http\Livewire\Panel\Noticia;

use App\Models\Noticia;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarNoticia extends Component
{

    use WithFileUploads;
    public $new ;
    public $identificador;
    public $titulo,$contenido,$imagen; // variables publicas del formularios
    protected $rules =[
        'new.titulo' => 'required|min:10|max:100',
        'new.contenido' => 'required',
        'new.imagen'=>'required',
    ];

    public function mount(Noticia $new )
    {
        $this->new = $new;
        $this->identificador = rand();
    }

    public function save()
    {
        if ($this->imagen) {
            Storage::delete([$this->new->imagen]);
            $this->new->imagen = $this->imagen->store('public/imagen_noticia');
        }
        $this->new->save();
        $this->reset(['titulo','contenido','imagen']);
        $this->identificador = rand();
        $this->emit('render');
        $this->emit('editar', 'El Registro fue Creado Exitosamente'); //mensaje
        return redirect()->route('show-noticia');

    }
    public function render()
    {
        return view('livewire.panel.noticia.editar-noticia');
    }


}
