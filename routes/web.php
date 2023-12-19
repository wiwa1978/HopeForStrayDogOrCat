<?php

use App\Livewire\FAQ;
use App\Livewire\Tag;
use App\Livewire\Home;
use App\Livewire\Adopt;
use App\Livewire\Donate;
use App\Livewire\Story;
use App\Livewire\AboutUs;
use App\Livewire\HowWeWork;
use App\Livewire\MessageForm;
use App\Livewire\StoryDetail;
use App\Livewire\AnimalDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ImageUploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/aboutus', AboutUs::class)->name('aboutus');
Route::get('/adopt', Adopt::class)->name('adopt');
Route::get('/adopt/{animal}', AnimalDetail::class)->name('animaldetail');
Route::get('/donate', Donate::class)->name('donate');
Route::get('/howwework', HowWeWork::class)->name('howwework');
Route::get('/stories', Story::class)->name('stories');
Route::get('/stories/{story}', StoryDetail::class)->name('storydetail');
Route::get('/faq', FAQ::class)->name('faq');
Route::get('/message', MessageForm::class)->name('message');


Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// });

//require __DIR__.'/auth.php';
