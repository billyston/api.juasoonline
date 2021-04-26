<?php

namespace App\Repositories\OrderService\Customer\Cart;

use App\Http\Requests\OrderService\Customer\Cart\CartRequest;
use App\Services\OrderService\Customer\CartService\CartService;

class CartRepository implements CartRepositoryInterface
{
    private $theCartService;

    /**
     * CartRepository constructor.
     *
     * @param CartService $orderService
     */
    public function __construct( CartService $orderService )
    {
        $this -> theCartService = $orderService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $theCustomer
     * @return array|mixed
     */
    public function index( $theCustomer ) : array
    {
        return $this -> theCartService -> getAll( $theCustomer );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $theCustomer
     * @param CartRequest $CartRequest
     * @return array|mixed
     */
    public function store( $theCustomer, CartRequest $CartRequest ) : array
    {
        return $this -> theCartService -> createCart( $theCustomer, $CartRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @param $theCart
     * @return array|mixed
     */
    public function show( $theCustomer, $theCart ) : array
    {
        return $this -> theCartService -> getCart( $theCustomer, $theCart );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param CartRequest $CartRequest
     * @param $theCart
     * @return array|mixed
     */
    public function update( $theCustomer, CartRequest $CartRequest, $theCart ) : array
    {
        return $this -> theCartService -> updateCart( $theCustomer, $CartRequest, $theCart );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @param $theCart
     * @return array|mixed
     */
    public function destroy( $theCustomer, $theCart ) : array
    {
        return $this -> theCartService -> deleteCart( $theCustomer, $theCart );
    }
}
