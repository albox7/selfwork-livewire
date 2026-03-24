<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // Risposta esatta = 8
    public $success = 8;
    public $count = 0;
    public $good = 'text-danger';

    public function increment()
    {
        $this->count++;

        if ($this->count == $this->success) {
            $this->good = 'text-success-custom';
        } else {
            $this->good = 'text-danger';
        }
    }

    public function decrement()
    {
        $this->count--;

        if ($this->count == $this->success) {
            $this->good = 'text-success-custom';
        } else {
            $this->good = 'text-danger';
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
