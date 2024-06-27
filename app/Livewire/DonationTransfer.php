<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transfer;

class DonationTransfer extends Component
{
    public $name, $nohp, $email, $nominal, $desc, $password;

    public function render()
    {
        return view('livewire.donation-transfer');
    }
    public function addData()
    {
        $this->validate([
            'name' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'nominal' => 'required',
            'desc' => 'required',
            'password' => 'required',

        ]);

        Transfer::create([
            'name' => $this->name,
            'nohp' => $this->nohp,
            'email' => $this->email,
            'nominal' => $this->nominal,
            'desc' => $this->desc,
            'password' => $this->password,

        ]);
        return redirect()->route('donation');

    }
}