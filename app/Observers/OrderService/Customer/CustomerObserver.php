<?php

namespace App\Observers\OrderService\Customer;

use App\Models\OrderService\Customer\Customer;

class CustomerObserver
{
    /**
     * @param StoreAdministrator $storeAdministrator
     */
    public function creating( Customer $customer )
    {
        $customer -> resource_id = uniqid();
        $customer -> password = bcrypt( $customer -> password );
    }
}

