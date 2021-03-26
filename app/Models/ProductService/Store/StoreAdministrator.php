<?php

namespace App\Models\ProductService\Store;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreAdministrator extends User
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    /**
     * @return string
     */
    public function getRouteKeyName () : string { return 'resource_id'; }
}
