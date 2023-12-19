<?php

namespace App\Livewire;

use Livewire\Component;

class Donate extends Component
{
    public function render()
    {
        return view('livewire.donate')
            ->layout('layouts.front.main');

    }
}
