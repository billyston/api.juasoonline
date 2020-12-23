<?php

namespace App\Repositories\Shop;

use App\Http\Requests\Shop\ShopRequest;
use App\Services\Shop\ShopService;

class ShopRepository implements ShopRepositoryInterface
{
    private $shopService;

    /**
     * ShopRepository constructor.
     * @param ShopService $shopService
     */
    public function __construct( ShopService $shopService )
    {
        $this -> shopService = $shopService;
    }

    /**
     * @return array|mixed
     */
    public function index()
    {
        return $this -> shopService -> getAll();
    }

    /**
     * @param ShopRequest $shopRequest
     * @return array|mixed
     */
    public function store( ShopRequest $shopRequest )
    {
        return $this -> shopService -> createShop( $shopRequest );
    }

    /**
     * @param $theShop
     * @return array|mixed
     */
    public function show( $theShop )
    {
        return $this -> shopService -> getShop( $theShop );
    }

    /**
     * @param ShopRequest $shopRequest
     * @param $theShop
     * @return array|mixed
     */
    public function update( ShopRequest $shopRequest, $theShop )
    {
        return $this -> shopService -> updateShop( $shopRequest, $theShop );
    }

    /**
     * @param $theShop
     * @return array|mixed
     */
    public function destroy( $theShop )
    {
        return $this -> shopService -> deleteShop( $theShop );
    }
}
