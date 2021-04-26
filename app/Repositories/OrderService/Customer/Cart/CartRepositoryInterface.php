<?php

namespace App\Repositories\OrderService\Customer\Cart;

use App\Http\Requests\OrderService\Customer\Cart\CartRequest;

interface CartRepositoryInterface
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
     * @param CartRequest $CartRequest
     * @return array|mixed
     */
    public function store( $theCustomer, CartRequest $CartRequest ) : array;

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @param $theCart
     * @return array|mixed
     */
    public function show( $theCustomer, $theCart ) : array;

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param CartRequest $CartRequest
     * @param $theCart
     * @return array|mixed
     */
    public function update( $theCustomer, CartRequest $CartRequest, $theCart ) : array;

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @param $theCart
     * @return array|mixed
     */
    public function destroy( $theCustomer, $theCart ) : array;
}
