<?php

namespace App\Repositories\Administrator;

use App\Http\Requests\Administrator\AdministratorRequest;

interface AdministratorRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index();

    /**
     * @param AdministratorRequest $administratorRequest
     * @return array|mixed
     */
    public function store( AdministratorRequest $administratorRequest );

    /**
     * @param $theAdministrator
     * @return array|mixed
     */
    public function show( $theAdministrator );

    /**
     * @param AdministratorRequest $administratorRequest
     * @param $theAdministrator
     * @return array|mixed
     */
    public function update( AdministratorRequest $administratorRequest, $theAdministrator );

    /**
     * @param $theAdministrator
     * @return array|mixed
     */
    public function destroy( $theAdministrator );
}
