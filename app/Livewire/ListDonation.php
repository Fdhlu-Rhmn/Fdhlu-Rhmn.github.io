<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Donation;
use Carbon\Carbon;

class ListDonation extends Component
{
    public $donations;
    public $filter;
    public $search;

    public function mount()
    {
        $this->filter = 'all';
        $this->loadDonations();
    }

    public function loadDonations()
    {
        $query = Donation::query();

        if ($this->filter === 'new') {
            $query->where('created_at', '>', Carbon::now()->subYear())
                ->where('tag', '1');
        } elseif ($this->filter === 'upcoming') {
            $query->where('tag', '2');
        } elseif ($this->filter === 'oldevents') {
            $query->where('tag', '3');
        }

        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        $this->donations = $query->get();
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
        $this->search = '';
        $this->loadDonations();
    }
    public function render()
    {
        return view('livewire.list-donation');
    }
}