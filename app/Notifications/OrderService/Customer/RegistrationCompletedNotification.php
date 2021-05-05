<?php

namespace App\Notifications\OrderService\Customer;

use App\Models\OrderService\Customer\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegistrationCompletedNotification extends Notification
{
    use Queueable;

    private $theCustomer;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( Customer $customer )
    {
        $this -> theCustomer = $customer;
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
     * @return MailMessage
     */
    public function toMail( $notifiable ) : MailMessage
    {
        return ( new MailMessage ) -> view( 'RegistrationCompleted', ['data' => $this -> theCustomer] );
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
