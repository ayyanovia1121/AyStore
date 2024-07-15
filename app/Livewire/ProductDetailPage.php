<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Product Detail - AyStore Indonesia')]
class ProductDetailPage extends Component
{
    public function render()
    {
        return view('livewire.product-detail-page');
    }
}
