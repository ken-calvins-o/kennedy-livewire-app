<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{

    public $name = 'Kennedy';

    public function changeName($newName) {
        $this->name = $newName;
    }

public
function render()
{
    return view('livewire.greeter');
}
}
