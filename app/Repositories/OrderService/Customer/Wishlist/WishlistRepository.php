<?php

namespace App\Repositories\OrderService\Customer\Wishlist;

use App\Http\Requests\OrderService\Customer\Wishlist\WishlistRequest;
use App\Services\OrderService\Customer\Wishlist\WishlistService;

class WishlistRepository implements WishlistRepositoryInterface
{
    private WishlistService $theWishlistService;

    /**
     * WishlistRepository constructor.
     *
     * @param WishlistService $wishlistService
     */
    public function __construct( WishlistService $wishlistService )
    {
        $this -> theWishlistService = $wishlistService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $theCustomer
     * @return array|mixed
     */
    public function index( $theCustomer ) : array
    {
        return $this -> theWishlistService -> getAll( $theCustomer );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $theCustomer
     * @param WishlistRequest $wishlistRequest
     * @return array|mixed
     */
    public function store( $theCustomer, WishlistRequest $wishlistRequest ) : array
    {
        return $this -> theWishlistService -> createWishlist( $theCustomer, $wishlistRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @param $theWishlist
     * @return array|mixed
     */
    public function show( $theCustomer, $theWishlist ) : array
    {
        return $this -> theWishlistService -> getWishlist( $theCustomer, $theWishlist );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param WishlistRequest $wishlistRequest
     * @param $theWishlist
     * @return array|mixed
     */
    public function update( $theCustomer, WishlistRequest $wishlistRequest, $theWishlist ) : array
    {
        return $this -> theWishlistService -> updateWishlist( $theCustomer, $wishlistRequest, $theWishlist );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @param $theWishlist
     * @return array|mixed
     */
    public function destroy( $theCustomer, $theWishlist ) : array
    {
        return $this -> theWishlistService -> deleteWishlist( $theCustomer, $theWishlist );
    }
}
