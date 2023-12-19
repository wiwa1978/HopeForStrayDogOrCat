<?php

namespace App\Livewire;

use App\Models\Animal;
use Livewire\Component;
use Jorenvh\Share\Share;

class Adopt extends Component
{
    public $animal;
    public $animals;
    public $shareButtons;

    public function render()
    {
        $this->animals = Animal::all();

        return view('livewire.adopt')
            ->layout('layouts.front.main');
    }


    public function showAnimalDetail(string $id) {
        $this->animal = Animal::find($id);

        return redirect()->route('animaldetail',['animal' => $this->animal->name]);
    }
}
