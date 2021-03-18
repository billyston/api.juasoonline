<?php

namespace App\Mail\ProductService;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StoreAdministratorEmailVerification extends Mailable
{
    use Queueable, SerializesModels;
    public $StoreAdministrator;

    /**
     * Create a new message instance.
     *
     * @param $StoreAdministrator
     */
    public function __construct( $StoreAdministrator )
    {
        $this -> StoreAdministrator = $StoreAdministrator;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this -> subject('Juasoonline Registration Verification') -> view('emails.storeadministratoremailverification' );
    }
}
