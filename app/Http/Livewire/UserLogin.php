<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;

class UserLogin extends Component
{
    public $users, $email, $password, $name;

    public function render()
    {
        return view('livewire.user-login');
    }

    public function login()
    {
$validatedDate = $this->validate([

            'email' => 'required|email',

            'password' => 'required',

        ]);

        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            session()->flash('success', "You are Login successful.");
            return redirect()->intended('/home');

    }else{

        session()->flash('error', 'Invalid email or password.');
        return redirect()->to(url()->previous());


    }

    }
}
