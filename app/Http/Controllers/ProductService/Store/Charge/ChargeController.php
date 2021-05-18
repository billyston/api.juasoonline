<?php

namespace App\Http\Controllers\ProductService\Store\Charge;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Store\Charge\ChargeRequest;
use App\Repositories\ProductService\Store\Charge\ChargeRepositoryInterface;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    private $theRepository;

    /**
     * ChargeController constructor.
     * @param ChargeRepositoryInterface $chargeRepository
     */
    public function __construct( ChargeRepositoryInterface $chargeRepository )
    {
        $this -> theRepository = $chargeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $Store
     * @return array
     */
    public function index( $Store ) : array
    {
        return $this -> theRepository -> index( $Store );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $Store
     * @param ChargeRequest $chargeRequest
     * @return array
     */
    public function store( $Store, ChargeRequest $chargeRequest ) : array
    {
        return $this -> theRepository -> store( $Store, $chargeRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $Store
     * @param $Charge
     * @return array
     */
    public function show( $Store, $Charge ) : array
    {
        return $this -> theRepository -> show( $Store, $Charge );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $Store
     * @param ChargeRequest $chargeRequest
     * @param $Charge
     * @return array
     */
    public function update( $Store, ChargeRequest $chargeRequest, $Charge ) : array
    {
        return $this -> theRepository -> update( $Store, $chargeRequest, $Charge );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $Store
     * @param $Charge
     * @return array
     */
    public function destroy( $Store, $Charge ) : array
    {
        return $this -> theRepository -> destroy( $Store, $Charge );
    }
}
