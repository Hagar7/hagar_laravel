<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;



class LoadProduct extends Component
{
    public $per_page = 4;

    public function load () {
        $this->per_page += 4;
    }
    public function render()
    {
        return view('livewire.load-product',[
            'products2'=>Product::query()->paginate($this->per_page)
        ]);
    }
}
