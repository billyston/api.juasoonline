<?php

namespace App\Repositories\OrderService\Customer\Order;

use App\Http\Requests\OrderService\Customer\Order\OrderRequest;

interface OrderRepositoryInterface
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
     * @param OrderRequest $orderRequest
     * @return array|mixed
     */
    public function store( $theCustomer, OrderRequest $orderRequest ) : array;

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @param $theOrder
     * @return array|mixed
     */
    public function show( $theCustomer, $theOrder ) : array;

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param OrderRequest $orderRequest
     * @param $theOrder
     * @return array|mixed
     */
    public function update( $theCustomer, OrderRequest $orderRequest, $theOrder ) : array;

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @param $theOrder
     * @return array|mixed
     */
    public function destroy( $theCustomer, $theOrder ) : array;
}
