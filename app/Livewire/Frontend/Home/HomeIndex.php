<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;

class HomeIndex extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.home-index')->layout('layouts.app');;
    }
}