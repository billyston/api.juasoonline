<?php

namespace App\Observers\ProductService\StoreAdministrator;

use App\Models\ProductService\Store\StoreAdministrator;
use App\Notifications\ProductService\Store\RegistrationCodeNotification;

class StoreAdministratorObserver
{
    /**
     * @param StoreAdministrator $storeAdministrator
     */
    public function created( StoreAdministrator $storeAdministrator )
    {
        $storeAdministrator -> notify( new RegistrationCodeNotification( $storeAdministrator ) );
    }
}
