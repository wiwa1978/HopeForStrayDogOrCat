<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jorenvh\Share\Share;
use App\Models\Animal;

class SocialShareButtonsController extends Controller
{
    public function shareAnimals()
    {
        $shareButtons = \Share::page(
            'https://onlinewebtutorblog.com/',
            'What you are writing, just share to world to learn!!',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        $animals = Animal::get();

        return view("adopt", compact('shareButtons', 'animals'));
    }
}
