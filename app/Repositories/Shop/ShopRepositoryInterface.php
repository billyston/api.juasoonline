<?php

namespace App\Repositories\Shop;

use App\Http\Requests\Shop\ShopRequest;

interface ShopRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param ShopRequest $shopRequest
     * @return mixed
     */
    public function store( ShopRequest $shopRequest );

    /**
     * @param $theShop
     * @return mixed
     */
    public function show( $theShop );

    /**
     * @param ShopRequest $shopRequest
     * @param $theShop
     * @return mixed
     */
    public function update( ShopRequest $shopRequest, $theShop );

    /**
     * @param $theShop
     * @return mixed
     */
    public function destroy( $theShop );
}
