<?php

namespace App\Observers\OrderService\Customer;

use App\Models\OrderService\Customer\Customer;
use App\Notifications\OrderService\Customer\RegistrationCodeNotification;
use App\Notifications\OrderService\Customer\RegistrationCompletedNotification;

class CustomerObserver
{
    /**
     * @param Customer $customer
     */
    public function creating( Customer $customer )
    {
        $customer -> password = bcrypt( $customer -> password );
    }

    /**
     * @param Customer $customer
     */
    public function created( Customer $customer )
    {
        $customer -> notify( new RegistrationCodeNotification( $customer ) );
    }

    public function updated( Customer $customer )
    {
        $customer -> notify( new RegistrationCompletedNotification( $customer ) );
    }
}
