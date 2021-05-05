<?php

namespace App\Notifications\ProductService\Store;

use App\Models\ProductService\Store\StoreAdministrator;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegistrationCodeNotification extends Notification
{
    use Queueable;
    private $theStoreAdministrator;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( StoreAdministrator $storeAdministrator )
    {
        $this -> theStoreAdministrator = $storeAdministrator;
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
    public function toMail( $notifiable )
    {
        return ( new MailMessage ) -> view( 'store.registrationcode', ['data' => $this -> theStoreAdministrator] );

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
