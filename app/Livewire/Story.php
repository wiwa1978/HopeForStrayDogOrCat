<?php

namespace App\Livewire;

use App\Models\Story as Stories;

use Livewire\Component;

class Story extends Component
{

    public $stories;


    public function render()
    {
        $this->stories = Stories::all();

        return view('livewire.stories')
        ->layout('layouts.front.main');
    }

    public function showStoryDetail(int $id) {
        $this->story = Stories::find($id);



        return redirect()->route('storydetail',['story' => $this->story->id]);
    }
}
