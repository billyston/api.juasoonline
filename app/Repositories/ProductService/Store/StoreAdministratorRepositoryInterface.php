<?php

namespace App\Repositories\ProductService\Store;

use App\Http\Requests\ProductService\Store\StoreAdministratorRequest;

interface StoreAdministratorRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index();

    /**
     * @param StoreAdministratorRequest $administratorRequest
     * @return array|mixed
     */
    public function store( StoreAdministratorRequest $administratorRequest ) : array;

    /**
     * @param $theAdministrator
     * @return array|mixed
     */
    public function show( $theAdministrator ) : array;

    /**
     * @param StoreAdministratorRequest $administratorRequest
     * @param $theAdministrator
     * @return array|mixed
     */
    public function update(StoreAdministratorRequest $administratorRequest, $theAdministrator );

    /**
     * @param $theAdministrator
     * @return array|mixed
     */
    public function destroy( $theAdministrator );
}
