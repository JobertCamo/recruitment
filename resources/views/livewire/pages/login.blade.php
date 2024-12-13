<?php

use Livewire\Volt\Component;

new class extends Component {

    public $email;
    public $password;

    public function submit()
    {
        $request = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if(! Auth::attempt(['email' => $this->email, 'password' => $this->password]))
        {
            throw ValidationException::withMessages([
                'email' => 'Email or password do not match!'
            ]);
        }

        session()->regenerate();

        $this->redirect('/dashboard');

    }
    
}; ?>

<form wire:submit="submit">
    <div class="grid items-center gap-2">
        <x-input label="Username or Email" wire:model="email" errorless/>
        <x-password label="password" wire:model="password" errorless/>
        <x-button type="submit" label="Login" class="mt-3" />
    </div>
    <div class="w-[25%] fixed top-5 right-5 transition-all">
        <x-errors class=""/>
    </div>
</form>