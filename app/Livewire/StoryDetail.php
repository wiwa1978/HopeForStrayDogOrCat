<?php

namespace App\Livewire;

use App\Models\Story;
use App\Models\Animal;
use Livewire\Component;

class StoryDetail extends Component
{
    public Story $story;
    public $animal;
    public $youtube_links;

    public function mount(Story $story)
    {

        $this->story = $story;
        $this->animal = Animal::find($this->story->animal_id);
        $this->youtube_links = $this->story->youtube_links;
    }

    public function render()
    {
        return view('livewire.story-detail')->layout('layouts.front.main');
    }
}
