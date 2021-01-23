<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserModel;

class User extends Component
{
    public $user;

    public function render()
    {
        $this->user = UserModel::all(); 
        return view('livewire.user');
    }
}
