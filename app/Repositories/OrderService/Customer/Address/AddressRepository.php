<?php

namespace App\Repositories\OrderService\Customer\Address;

use App\Http\Requests\OrderService\Customer\Address\AddressRequest;
use App\Services\OrderService\Customer\Address\AddressService;

class AddressRepository implements AddressRepositoryInterface
{
    private $theAddressService;

    /**
     * AddressRepository constructor.
     * @param AddressService $addressService
     */
    public function __construct( AddressService $addressService )
    {
        $this -> theAddressService = $addressService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $theCustomer
     * @return array|mixed
     */
    public function index( $theCustomer ) : array
    {
        return $this -> theAddressService -> getAll( $theCustomer );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $theCustomer
     * @param AddressRequest $addressRequest
     * @return array|mixed
     */
    public function store( $theCustomer, AddressRequest $addressRequest ) : array
    {
        return $this -> theAddressService -> createAddress( $theCustomer, $addressRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @param $theAddress
     * @return array|mixed
     */
    public function show( $theCustomer, $theAddress ) : array
    {
        return $this -> theAddressService -> getAddress( $theCustomer, $theAddress );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param AddressRequest $addressRequest
     * @param $theAddress
     * @return array|mixed
     */
    public function update( $theCustomer, AddressRequest $addressRequest, $theAddress ) : array
    {
        return $this -> theAddressService -> updateAddress( $theCustomer, $addressRequest, $theAddress );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @param $theAddress
     * @return array
     */
    public function destroy( $theCustomer, $theAddress ) : array
    {
        return $this -> theAddressService -> deleteAddress( $theCustomer, $theAddress );
    }
}
