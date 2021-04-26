<?php

namespace App\Repositories\ProductService\Store\StoreAdministrator;

use App\Http\Requests\ProductService\Store\StoreAdministrator\StoreAdministratorRequest;

interface StoreAdministratorRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index();

    /**
     * @param $theStore
     * @param StoreAdministratorRequest $administratorRequest
     * @return array|mixed
     */
    public function store( $theStore, StoreAdministratorRequest $administratorRequest ) : array;

    /**
     * @param $theStore
     * @param $theAdministrator
     * @return array|mixed
     */
    public function show( $theStore, $theAdministrator ) : array;

    /**
     * @param $theStore
     * @param StoreAdministratorRequest $administratorRequest
     * @param $theAdministrator
     * @return array|mixed
     */
    public function update( $theStore, StoreAdministratorRequest $administratorRequest, $theAdministrator );

    /**
     * @param $theStore
     * @param $theAdministrator
     * @return array|mixed
     */
    public function destroy( $theStore, $theAdministrator );
}
