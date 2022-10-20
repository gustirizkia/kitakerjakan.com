<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;

class ArtikelLivewire extends Component
{
    public $limit = 12, $items;
    public $isLast = false;

    public function render()
    {
        $limit = $this->limit;

        $data = Artikel::orderBy('id', 'desc')->limit($limit)->get();
        $count = Artikel::count();

        if($data->count() >= $count){
            $this->isLast = true;
        }

        $this->items = $data;

        return view('livewire.artikel-livewire');
    }

    public function addLimit($limit){
        $this->limit += $limit;
        $data = Artikel::orderBy('id', 'desc')->limit($limit)->get();
    }
}
