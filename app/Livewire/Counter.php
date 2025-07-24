<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    //dichiarazione degli attributi
    public $value = 0;
    public $five = 5;
    public $number;

    //funzione per incrementare
    public function increment()
    {
        $this->value++;
    }

    //funzione per decrementare
    public function decrement()
    {
        $this->value--;
    }

    //funzione per incrementare con parametro
    public function incrementByNumber($number)
    {
        $this->value += $number;
    }


    public function incrementByInput(){
        $this->value += $this->number;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
