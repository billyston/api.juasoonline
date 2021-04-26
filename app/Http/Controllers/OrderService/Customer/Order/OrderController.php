<?php

namespace App\Http\Controllers\OrderService\Customer\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderService\Customer\Cart\CartRequest;
use App\Http\Requests\OrderService\Customer\Order\OrderRequest;
use App\Repositories\OrderService\Customer\Order\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $theRepository;

    /**
     * OrderController constructor.
     *
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct( OrderRepositoryInterface $orderRepository )
    {
        $this -> theRepository = $orderRepository;
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
     * @param OrderRequest $orderRequest
     * @return array|mixed
     */
    public function store( $theCustomer, OrderRequest $orderRequest ) : array
    {
        return $this -> theRepository -> store( $theCustomer, $orderRequest );
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
        return $this -> theRepository -> show( $theCustomer, $theOrder );
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
        return $this -> theRepository -> update( $theCustomer, $orderRequest, $theOrder );
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
        return $this -> theRepository -> destroy( $theCustomer, $theOrder );
    }
}
