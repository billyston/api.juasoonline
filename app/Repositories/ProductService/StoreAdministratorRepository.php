<?php

namespace App\Repositories\ProductService;

use App\Http\Requests\ProductService\StoreAdministratorRequest;
use App\Mail\ProductService\StoreAdministratorEmailVerification;
use App\Models\ProductService\StoreAdministrator;
use App\Services\ProductService\StoreAdministratorService;
use Illuminate\Support\Facades\Mail;

class StoreAdministratorRepository implements StoreAdministratorRepositoryInterface
{
    private $administratorService;

    /**
     * StoreRepository constructor.
     * @param StoreAdministratorService $administratorService
     */
    public function __construct(StoreAdministratorService $administratorService )
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
     * @param StoreAdministratorRequest $administratorRequest
     * @return array|mixed
     */
    public function store(StoreAdministratorRequest $administratorRequest ) : array
    {
        $response =  $this -> administratorService -> createAdministrator( $administratorRequest );

        // Store Admin login
        $storeAdmin = new StoreAdministrator(['resource_id' => $response['data']['attributes']['resource_id'], 'email' => $response['data']['attributes']['email'], 'password' => bcrypt( $administratorRequest -> input( 'data.attributes.password' ) ), 'verification_code' => generateVerificationCode( 6 ) ]);
        $storeAdmin -> save();

        // Email confirmation code
        Mail::to( $response['data']['attributes']['email'] ) -> send( new StoreAdministratorEmailVerification( $storeAdmin ) );
        return $response;
    }

    /**
     * @param $theAdministrator
     * @return array|mixed
     */
    public function show( $theAdministrator ) : array
    {
        return $this -> administratorService -> getAdministrator( $theAdministrator );
    }

    /**
     * @param StoreAdministratorRequest $administratorRequest
     * @param $theAdministrator
     * @return array|mixed
     */
    public function update(StoreAdministratorRequest $administratorRequest, $theAdministrator ) : array
    {
        return $this -> administratorService -> updateAdministrator( $administratorRequest, $theAdministrator );
    }

    /**
     * @param $theAdministrator
     * @return array|mixed
     */
    public function destroy( $theAdministrator ) : array
    {
        return $this -> administratorService -> deleteAdministrator( $theAdministrator );
    }
}
