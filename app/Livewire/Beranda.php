<?php

namespace App\Livewire;

use App\Models\Tokenizing;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Beranda extends Component
{    
    use WithFileUploads;


    public $books;

    public function mount()
    {
        // $this->books = Books::inRandomOrder()->take(5)->get();
    }
    public function render()
    {
        return view('livewire.beranda');
    }
    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];
 
    public function save()
    {
        foreach ($this->photos as $photo) {
            $photo->store(path: 'photos');
        }
    }
}