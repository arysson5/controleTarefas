<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RedefinirSenhaNotificacao extends Notification
{
    use Queueable;
    public $token;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->$token = $token;

        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
   
    public function toMail($notifiable)
    {
        $url = 'http://locahost:8000/password/reset/'.$this->token;
        $minutos =  config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
        return (new MailMessage)
        ->subject('Atualização de senha')
        ->line('Esqueceu a senha ? Vamos renovar')
        ->action('clique para mudar senha', $url)
        ->line('A mensagem expira em'. $minutos.' minutos')
        ->line('Se não requisitou a mudança desconsidere.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
