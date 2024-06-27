<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Models\MachineResult;

class MachineLearning extends Component
{
    use WithFileUploads;

    public $results;
    public function render()
    {
        return view('livewire.machine-learning');
    }

    public function addData()
    {
        $this->validate([
            'result' => 'required',
        ]);

        MachineResult::create([
            'result' => $this->result,
        ]);
        return redirect()->route('machine-learning');
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