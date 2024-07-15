<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Category - AyStore Indonesia')]
class CategoryPage extends Component
{
    public function render()
    {
        return view('livewire.category-page');
    }
}
