<?php

namespace App\Repositories\ProductService\Store\StoreAdministrator;

use App\Http\Requests\ProductService\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Mail\ProductService\StoreAdministratorEmailVerification;
use App\Models\ProductService\Store\StoreAdministrator;
use App\Services\ProductService\Store\StoreAdministrator\StoreAdministratorService;
use Illuminate\Support\Facades\Mail;

class StoreAdministratorRepository implements StoreAdministratorRepositoryInterface
{
    private $administratorService;

    /**
     * StoreRepository constructor.
     * @param StoreAdministratorService $administratorService
     */
    public function __construct( StoreAdministratorService $administratorService )
    {
        $this -> administratorService = $administratorService;
    }

    /**
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> administratorService -> getAll();
    }

    /**
     * @param $theStore
     * @param StoreAdministratorRequest $administratorRequest
     * @return array|mixed
     */
    public function store( $theStore, StoreAdministratorRequest $administratorRequest ) : array
    {
        $response =  $this -> administratorService -> createAdministrator( $theStore, $administratorRequest );

        // Store Admin login
        $storeAdmin = new StoreAdministrator([ 'resource_id' => $response['data']['attributes']['resource_id'], 'store_resource_id' => $administratorRequest -> input('data.attributes.store_resource_id'), 'email' => $response['data']['attributes']['email'], 'password' => bcrypt( $administratorRequest -> input( 'data.attributes.password' ) ), 'verification_code' => generateVerificationCode( 6 ) ]);
        $storeAdmin -> save();

        // Email confirmation code
        Mail::to( $response['data']['attributes']['email'] ) -> send( new StoreAdministratorEmailVerification( $storeAdmin ) );
        return $response;
    }

    /**
     * @param $theStore
     * @param $theAdministrator
     * @return array|mixed
     */
    public function show( $theStore, $theAdministrator ) : array
    {
        return $this -> administratorService -> getAdministrator( $theStore, $theAdministrator );
    }

    /**
     * @param $theStore
     * @param StoreAdministratorRequest $administratorRequest
     * @param $theAdministrator
     * @return array|mixed
     */
    public function update( $theStore, StoreAdministratorRequest $administratorRequest, $theAdministrator ) : array
    {
        return $this -> administratorService -> updateAdministrator( $theStore, $administratorRequest, $theAdministrator );
    }

    /**
     * @param $theStore
     * @param $theAdministrator
     * @return array|mixed
     */
    public function destroy( $theStore, $theAdministrator ) : array
    {
        return $this -> administratorService -> deleteAdministrator( $theStore, $theAdministrator );
    }
}
