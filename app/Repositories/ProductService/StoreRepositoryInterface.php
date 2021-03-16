<?php

namespace App\Repositories\ProductService;

use App\Http\Requests\ProductService\StoreRequest;

interface StoreRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param StoreRequest $shopRequest
     * @return mixed
     */
    public function store( StoreRequest $shopRequest );

    /**
     * @param $theShop
     * @return mixed
     */
    public function show( $theShop );

    /**
     * @param StoreRequest $shopRequest
     * @param $theShop
     * @return mixed
     */
    public function update(StoreRequest $shopRequest, $theShop );

    /**
     * @param $theShop
     * @return mixed
     */
    public function destroy( $theShop );
}
