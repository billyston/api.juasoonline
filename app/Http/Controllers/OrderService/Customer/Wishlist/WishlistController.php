<?php

namespace App\Http\Controllers\OrderService\Customer\Wishlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderService\Customer\Wishlist\WishlistRequest;
use App\Repositories\OrderService\Customer\Wishlist\WishlistRepositoryInterface;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    private $theRepository;

    public function __construct( WishlistRepositoryInterface $wishlistRepository )
    {
        $this -> theRepository = $wishlistRepository;
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
     * @param WishlistRequest $wishlistRequest
     * @param $theWishlist
     * @return array|mixed
     */
    public function store( $theCustomer, WishlistRequest $wishlistRequest ) : array
    {
        return $this -> theRepository -> store( $theCustomer, $wishlistRequest );
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
        return $this -> theRepository -> show( $theCustomer, $theWishlist );
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
        return $this -> theRepository -> update( $theCustomer, $wishlistRequest, $theWishlist );
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
        return $this -> theRepository -> destroy( $theCustomer, $theWishlist );
    }
}
