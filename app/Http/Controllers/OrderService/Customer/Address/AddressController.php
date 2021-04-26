<?php

namespace App\Http\Controllers\OrderService\Customer\Address;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderService\Customer\Address\AddressRequest;
use App\Repositories\OrderService\Customer\Address\AddressRepositoryInterface;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    private $theRepository;

    /**
     * AddressController constructor.
     * @param AddressRepositoryInterface $addressRepository
     */
    public function __construct( AddressRepositoryInterface $addressRepository )
    {
        $this -> theRepository = $addressRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $theCustomer
     * @return array|mixed
     */
    public function index( $theCustomer ) : array
    {
        return $this -> theRepository -> index( $theCustomer );
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
        return $this -> theRepository -> store( $theCustomer, $addressRequest );
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
        return $this -> theRepository -> show( $theCustomer, $theAddress );
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
        return $this -> theRepository -> update( $theCustomer, $addressRequest, $theAddress );
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
        return $this -> theRepository -> destroy( $theCustomer, $theAddress );
    }
}
