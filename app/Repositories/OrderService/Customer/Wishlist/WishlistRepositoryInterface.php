<?php

namespace App\Repositories\OrderService\Customer\Wishlist;

use App\Http\Requests\OrderService\Customer\Wishlist\WishlistRequest;

interface WishlistRepositoryInterface
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
     * @param WishlistRequest $wishlistRequest
     * @return array|mixed
     */
    public function store( $theCustomer, WishlistRequest $wishlistRequest ) : array;

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @param $theWishlist
     * @return array|mixed
     */
    public function show( $theCustomer, $theWishlist ) : array;

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param WishlistRequest $wishlistRequest
     * @param $theWishlist
     * @return array|mixed
     */
    public function update( $theCustomer, WishlistRequest $wishlistRequest, $theWishlist ) : array;

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @param $theWishlist
     * @return array|mixed
     */
    public function destroy( $theCustomer, $theWishlist ) : array;
}
