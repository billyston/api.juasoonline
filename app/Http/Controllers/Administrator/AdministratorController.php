<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\AdministratorRequest;
use App\Repositories\Administrator\AdministratorRepositoryInterface;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    private $theRepository;

    /**
     * ShopController constructor.
     * @param AdministratorRepositoryInterface $administratorRepository
     */
    public function __construct( AdministratorRepositoryInterface $administratorRepository )
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
     * @param AdministratorRequest $administratorRequest
     * @return mixed
     */
    public function store( AdministratorRequest $administratorRequest )
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
     * @param AdministratorRequest $administratorRequest
     * @param $theAdministrator
     * @return mixed
     */
    public function update( AdministratorRequest $administratorRequest, $theAdministrator )
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
