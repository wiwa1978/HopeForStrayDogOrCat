<?php

namespace App\Livewire;

use Livewire\Component;

class HowWeWork extends Component
{
    public function render()
    {
        return view('livewire.how-we-work')
        ->layout('layouts.front.main');
    }
}
