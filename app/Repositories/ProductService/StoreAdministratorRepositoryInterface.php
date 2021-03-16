<?php

namespace App\Repositories\ProductService;

use App\Http\Requests\ProductService\StoreAdministratorRequest;

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
    public function show( $theAdministrator );

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
