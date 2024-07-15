<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Orders - AyStore Indonesia')]
class MyOrdersPage extends Component
{
    public function render()
    {
        return view('livewire.my-orders-page');
    }
}
