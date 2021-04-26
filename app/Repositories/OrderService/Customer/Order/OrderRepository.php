<?php

namespace App\Repositories\OrderService\Customer\Order;

use App\Http\Requests\OrderService\Customer\Order\OrderRequest;
use App\Services\OrderService\Customer\OrderService\OrderService;

class OrderRepository implements OrderRepositoryInterface
{
    private $theOrderService;

    /**
     * OrderRepository constructor.
     *
     * @param OrderService $orderService
     */
    public function __construct( OrderService $orderService )
    {
        $this -> theOrderService = $orderService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $theCustomer
     * @return array|mixed
     */
    public function index( $theCustomer ) : array
    {
        return $this -> theOrderService -> getAll( $theCustomer );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $theCustomer
     * @param OrderRequest $orderRequest
     * @return array|mixed
     */
    public function store( $theCustomer, OrderRequest $orderRequest ) : array
    {
        return $this -> theOrderService -> createOrder( $theCustomer, $orderRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @param $theOrder
     * @return array|mixed
     */
    public function show( $theCustomer, $theOrder ) : array
    {
        return $this -> theOrderService -> getOrder( $theCustomer, $theOrder );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param OrderRequest $orderRequest
     * @param $theOrder
     * @return array|mixed
     */
    public function update( $theCustomer, OrderRequest $orderRequest, $theOrder ) : array
    {
        return $this -> theOrderService -> updateOrder( $theCustomer, $orderRequest, $theOrder );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @param $theOrder
     * @return array|mixed
     */
    public function destroy( $theCustomer, $theOrder ) : array
    {
        return $this -> theOrderService -> deleteOrder( $theCustomer, $theOrder );
    }
}
