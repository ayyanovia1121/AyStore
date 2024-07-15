<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Products - AyStore Indonesia')]
class ProductsPage extends Component
{
    public function render()
    {
        return view('livewire.products-page');
    }
}
