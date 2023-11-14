<?php

namespace App\Filament\Auth;

class Login extends \Filament\Pages\Auth\Login
{
    public function mount(): void
    {
        parent::mount();
        $this->form->fill([
            'email' => 'user@example.com',
            'password' => 'password',
            'remember' => true,
        ]);
    }
}
