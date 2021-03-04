<?php

namespace App\Repositories\ProductService;

use App\Http\Requests\ProductService\StoreRequest;
use App\Services\ProductService\StoreService;

class StoreRepository implements StoreRepositoryInterface
{
    private $shopService;

    /**
     * StoreRepository constructor.
     * @param StoreService $shopService
     */
    public function __construct(StoreService $shopService )
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
     * @param StoreRequest $shopRequest
     * @return array|mixed
     */
    public function store(StoreRequest $shopRequest )
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
     * @param StoreRequest $shopRequest
     * @param $theShop
     * @return array|mixed
     */
    public function update(StoreRequest $shopRequest, $theShop )
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
