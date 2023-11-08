<?php

namespace App\Http\Livewire\Front;

use App\Models\Noticia;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowArticuloNoticia extends Component
{

    public function mount($id)
    {
       // $this->articulo = DB::table('noticias')->where('id',$id)->first();
      // dd($articulo->titulo);

      $this->articulo = Noticia::where('id', $id)->orderby('id','Desc')->first();

      
    }
    public function render()
    {
        return view('livewire.front.show-articulo-noticia');
    }
}
