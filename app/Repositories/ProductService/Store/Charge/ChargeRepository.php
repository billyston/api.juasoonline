<?php

namespace App\Repositories\ProductService\Store\Charge;

use App\Http\Requests\ProductService\Store\Charge\ChargeRequest;
use App\Services\ProductService\Store\Charge\ChargeService;

class ChargeRepository implements ChargeRepositoryInterface
{
    private $chargeService;

    /**
     * StoreRepository constructor.
     * @param ChargeService $chargeService
     */
    public function __construct( ChargeService $chargeService )
    {
        $this -> chargeService = $chargeService;
    }

    /**
     * @param $Store
     * @return array
     */
    public function index( $Store ) : array
    {
        return $this -> chargeService -> getAll( $Store );
    }

    /**
     * @param $Store
     * @param ChargeRequest $chargeRequest
     * @return array
     */
    public function store( $Store, ChargeRequest $chargeRequest ) : array
    {
        return $this -> chargeService -> createCharge( $Store, $chargeRequest );
    }

    /**
     * @param $Store
     * @param $Charge
     * @return array
     */
    public function show( $Store, $Charge ) : array
    {
        return $this -> chargeService -> getCharge( $Store, $Charge );
    }

    /**
     * @param $Store
     * @param ChargeRequest $chargeRequest
     * @param $Charge
     * @return array
     */
    public function update( $Store, ChargeRequest $chargeRequest, $Charge ) : array
    {
        return $this -> chargeService -> updateCharge( $Store, $chargeRequest, $Charge );
    }

    /**
     * @param $Store
     * @param $Charge
     * @return array
     */
    public function destroy( $Store, $Charge ) : array
    {
        return $this -> chargeService -> deleteCharge( $Store, $Charge );
    }
}
