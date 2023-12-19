<?php

namespace App\Livewire;

use App\Models\Animal;
use Livewire\Component;
use Dipesh79\LaravelShare\LaravelShare;

class AnimalDetail extends Component
{

    public Animal $animal;
    public $photos;
    public $videos;
    public $youtube_links;
    public $currentUrl;

    public function mount(Animal $animal)
    {
        $this->animal = $animal;
        $this->photos = $this->animal->photos_additional;
        $this->videos = $this->animal->videos;
        $this->youtube_links = $this->animal->youtube_links;
        $this->currentUrl = url()->current();
    }

    public function render()
    {

        //dd($this->animal->youtube_links);

        $share = new LaravelShare();
        $facebook_link = $share->facebook($this->currentUrl);
        $messenger_link = $share->messenger($this->currentUrl);
        $twitter_link = $share->twitter($this->currentUrl);
        $whatsapp_link = $share->whatsapp($this->currentUrl);
        $pinterest_link = $share->pinterest($this->currentUrl);

        return view('livewire.animal-detail', [

            'facebook_link' => $facebook_link,
            'messenger_link' => $messenger_link,
            'twitter_link' => $twitter_link,
            'whatsapp_link' => $whatsapp_link,
            'pinterest_link' => $pinterest_link
        ])->layout('layouts.front.main');
    }

    public function gotoDonate()
    {
        return redirect()->to('/donate');
    }
}
