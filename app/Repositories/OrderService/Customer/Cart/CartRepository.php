<?php

namespace App\Repositories\OrderService\Customer\Cart;

use App\Http\Requests\OrderService\Customer\Cart\CartRequest;
use App\Services\OrderService\Customer\CartService\CartService;
use App\Traits\HybridService;

class CartRepository implements CartRepositoryInterface
{
    private CartService $theCartService;
    private HybridService $theHybridService;

    /**
     * CartRepository constructor.
     *
     * @param CartService $orderService
     * @param HybridService $hybridService
     */
    public function __construct( CartService $orderService, HybridService $hybridService )
    {
        $this -> theCartService = $orderService;
        $this -> theHybridService = $hybridService;
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
        // Get product and calculate subtotal
        $product = $this -> theHybridService -> getProduct( $CartRequest -> input('data.attributes.product_id' ));
        $subTotal = $CartRequest -> input('data.attributes.quantity') * $product['data']['attributes']['raw_sales_price'];

        $data = array( 'type' => 'Cart', 'attributes' => array('product_id' => $CartRequest -> input('data.attributes.product_id'), 'color_id' => $CartRequest -> input('data.attributes.color_id'), 'size_id' => $CartRequest -> input('data.attributes.size_id'), 'bundle_id' => $CartRequest -> input('data.attributes.bundle_id'), 'quantity' => $CartRequest -> input('data.attributes.quantity'), 'subtotal' => $subTotal, 'total' => $subTotal + 30 ), 'relationships' => array('customer' => array( 'customer_id' => $CartRequest -> input('data.relationships.customer.customer_id') )));
        return $this -> theCartService -> createCart( $theCustomer, $data );
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
