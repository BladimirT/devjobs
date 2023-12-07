<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->greeting('¡Hola!')
                ->subject('Verificar Cuenta')
                ->line('Por favor haz click en el botón para poder verificar tu correo electrónico')
                ->action('Confirmar Cuenta', $url)
                ->line('Si tu no creaste esta cuenta, no necesitas realizar ninguna acción')
                ->salutation(' ');
        });
    }
}
