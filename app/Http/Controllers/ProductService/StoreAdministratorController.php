<?php

namespace App\Http\Controllers\ProductService;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\StoreAdministratorRequest;
use App\Repositories\ProductService\StoreAdministratorRepositoryInterface;

class StoreAdministratorController extends Controller
{
    private $theRepository;

    /**
     * StoreController constructor.
     * @param StoreAdministratorRepositoryInterface $administratorRepository
     */
    public function __construct( StoreAdministratorRepositoryInterface $administratorRepository )
    {
        $this -> theRepository = $administratorRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param StoreAdministratorRequest $administratorRequest
     * @return array|mixed
     */
    public function store( StoreAdministratorRequest $administratorRequest ) : array
    {
        return $this -> theRepository -> store( $administratorRequest );
    }

    /**
     * @param $theAdministrator
     * @return mixed
     */
    public function show( $theAdministrator )
    {
        return $this -> theRepository -> show( $theAdministrator );
    }

    /**
     * @param StoreAdministratorRequest $administratorRequest
     * @param $theAdministrator
     * @return mixed
     */
    public function update( StoreAdministratorRequest $administratorRequest, $theAdministrator )
    {
        return $this -> theRepository -> update( $administratorRequest, $theAdministrator );
    }

    /**
     * @param $theAdministrator
     * @return mixed
     */
    public function destroy( $theAdministrator )
    {
        return $this -> theRepository -> destroy( $theAdministrator );
    }
}
