<?php

namespace App\Livewire;

use App\Models\Faq as FAQs;
use Livewire\Component;

class FAQ extends Component
{
    public $faqs;

    public function render()
    {
        $this->faqs = FAQs::all();

        return view('livewire.faq')
            ->layout('layouts.front.main');;
    }
}
