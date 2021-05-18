<?php

namespace App\Repositories\ProductService\Store\Charge;

use App\Http\Requests\ProductService\Store\Charge\ChargeRequest;

interface ChargeRepositoryInterface
{
    /**
     * @param $Store
     * @return array
     */
    public function index( $Store ) : array;

    /**
     * @param $Store
     * @param ChargeRequest $chargeRequest
     * @return array
     */
    public function store( $Store, ChargeRequest $chargeRequest ) : array;

    /**
     * @param $Store
     * @param $Charge
     * @return array
     */
    public function show( $Store, $Charge ) : array;

    /**
     * @param $Store
     * @param ChargeRequest $chargeRequest
     * @param $Charge
     * @return array
     */
    public function update( $Store, ChargeRequest $chargeRequest, $Charge ) : array;

    /**
     * @param $Store
     * @param $Charge
     * @return array
     */
    public function destroy( $Store, $Charge ) : array;
}
