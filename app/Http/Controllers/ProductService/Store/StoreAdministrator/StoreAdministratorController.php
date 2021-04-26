<?php

namespace App\Http\Controllers\ProductService\Store\StoreAdministrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Repositories\ProductService\Store\StoreAdministrator\StoreAdministratorRepositoryInterface;
use App\Traits\AuthenticatesJwtUsers;

class StoreAdministratorController extends Controller
{
    private $theRepository; use AuthenticatesJwtUsers;

    /**
     * StoreController constructor.
     * @param StoreAdministratorRepositoryInterface $administratorRepository
     */
    public function __construct( StoreAdministratorRepositoryInterface $administratorRepository )
    {
        $this -> theRepository = $administratorRepository;
        $this -> setGuardName( 'store_administrator' );
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param $theStore
     * @param StoreAdministratorRequest $administratorRequest
     * @return array|mixed
     */
    public function store( $theStore, StoreAdministratorRequest $administratorRequest ) : array
    {
        return $this -> theRepository -> store( $theStore, $administratorRequest );
    }

    /**
     * @param $theStore
     * @param $theAdministrator
     * @return array|mixed
     */
    public function show( $theStore, $theAdministrator ) : array
    {
        return $this -> theRepository -> show( $theStore, $theAdministrator );
    }

    /**
     * @param $theStore
     * @param StoreAdministratorRequest $administratorRequest
     * @param $theAdministrator
     * @return mixed
     */
    public function update( $theStore, StoreAdministratorRequest $administratorRequest, $theAdministrator )
    {
        return $this -> theRepository -> update( $theStore, $administratorRequest, $theAdministrator );
    }

    /**
     * @param $theStore
     * @param $theAdministrator
     * @return mixed
     */
    public function destroy( $theStore, $theAdministrator )
    {
        return $this -> theRepository -> destroy( $theStore, $theAdministrator );
    }
}
