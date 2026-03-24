<?php

namespace App\Livewire;

use Livewire\Component;

class CounterParam extends Component
{

    // Risposta esatta = 11
    public $success = 11;
    public $count = 0;
    public $good = 'text-danger';
    public $n = 1;


    public function increment($n){
        $this->count += $n;

        if ($this->count == $this->success) {
            $this->good = 'text-success-custom';
        } else {
            $this->good = 'text-danger';
        }
    }

    public function decrement($n) {
        
        $this->count -= $n;

        if ($this->count == $this->success) {
            $this->good = 'text-success-custom';
        } else {
            $this->good = 'text-danger';
        }
    }

    public function render()
    {
        return view('livewire.counter-param');
    }
}
