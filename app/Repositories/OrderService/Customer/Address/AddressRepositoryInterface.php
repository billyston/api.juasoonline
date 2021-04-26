<?php

namespace App\Repositories\OrderService\Customer\Address;

use App\Http\Requests\OrderService\Customer\Address\AddressRequest;

interface AddressRepositoryInterface
{
    /**
     * Display a listing of the resource.
     *
     * @param $theCustomer
     * @return array|mixed
     */
    public function index( $theCustomer ) : array;

    /**
     * Store a newly created resource in storage.
     *
     * @param $theCustomer
     * @param AddressRequest $addressRequest
     * @return array|mixed
     */
    public function store( $theCustomer, AddressRequest $addressRequest ) : array;

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @param $theAddress
     * @return array|mixed
     */
    public function show( $theCustomer, $theAddress ) : array;

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param AddressRequest $addressRequest
     * @param $theAddress
     * @return array|mixed
     */
    public function update( $theCustomer, AddressRequest $addressRequest, $theAddress ) : array;

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @param $theAddress
     * @return array
     */
    public function destroy( $theCustomer, $theAddress ) : array;
}
