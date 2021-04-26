<?php

namespace App\Http\Controllers\OrderService\Customer\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderService\Customer\Cart\CartRequest;
use App\Repositories\OrderService\Customer\Cart\CartRepositoryInterface;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $theRepository;

    /**
     * CartController constructor.
     *
     * @param CartRepositoryInterface $cartRepository
     */
    public function __construct( CartRepositoryInterface $cartRepository )
    {
        $this -> theRepository = $cartRepository;
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
     * @param CartRequest $cartRequest
     * @return array|mixed
     */
    public function store( $theCustomer, CartRequest $cartRequest ) : array
    {
        return $this -> theRepository -> store( $theCustomer, $cartRequest );
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
        return $this -> theRepository -> show( $theCustomer, $theCart );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param CartRequest $cartRequest
     * @param $theCart
     * @return array|mixed
     */
    public function update( $theCustomer, CartRequest $cartRequest, $theCart ) : array
    {
        return $this -> theRepository -> update( $theCustomer, $cartRequest, $theCart );
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
        return $this -> theRepository -> destroy( $theCustomer, $theCart );
    }
}
