<?php

namespace App\Repositories\OrderService\Customer\Order;

use App\Http\Requests\OrderService\Customer\Order\OrderRequest;
use App\Services\OrderService\Customer\OrderService\OrderService;
use App\Traits\HybridService;

class OrderRepository implements OrderRepositoryInterface
{
    private OrderService $theOrderService;
    private HybridService $theHybridService;

    /**
     * OrderRepository constructor.
     *
     * @param OrderService $orderService
     * @param HybridService $hybridService
     */
    public function __construct( OrderService $orderService, HybridService $hybridService )
    {
        $this -> theOrderService = $orderService;
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
        // Get product and calculate subtotal
        $product = $this -> theHybridService -> getProduct( $orderRequest -> input('data.attributes.product_id' ));
        $subTotal = $orderRequest -> input('data.attributes.quantity') * $product['data']['attributes']['raw_sales_price'];

        //

        $data = array( 'type' => 'Order', 'attributes' => array('product_id' => $orderRequest -> input('data.attributes.product_id'), 'quantity' => $orderRequest -> input('data.attributes.quantity'), 'subtotal' => $subTotal, 'total' => $subTotal + 30 ), 'relationships' => array('customer' => array( 'customer_id' => $orderRequest -> input('data.relationships.customer.customer_id') )));
        return $this -> theOrderService -> createOrder( $theCustomer, $data );
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
