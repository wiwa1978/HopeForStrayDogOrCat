<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home')
            ->layout('layouts.front.main');
    }

    public function gotoAdopt()
    {
        return redirect()->to('/adopt');
    }

    public function gotoDonate()
    {
        return redirect()->to('/donate');
    }
}
