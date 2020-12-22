<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ShopRequest;
use App\Repositories\Shop\ShopRepositoryInterface;

class ShopController extends Controller
{
    private $theRepository;

    /**
     * ShopController constructor.
     * @param ShopRepositoryInterface $shopRepository
     */
    public function __construct( ShopRepositoryInterface $shopRepository )
    {
        $this -> theRepository = $shopRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param ShopRequest $shopRequest
     * @return mixed
     */
    public function store( ShopRequest $shopRequest )
    {
        return $this -> theRepository -> store( $shopRequest );
    }

    /**
     * @param $theShop
     * @return mixed
     */
    public function show( $theShop )
    {
        return $this -> theRepository -> show( $theShop );
    }

    /**
     * @param ShopRequest $shopRequest
     * @param $theShop
     * @return mixed
     */
    public function update( ShopRequest $shopRequest, $theShop )
    {
        return $this -> theRepository -> update( $shopRequest, $theShop );
    }

    /**
     * @param $theShop
     * @return mixed
     */
    public function destroy( $theShop )
    {
        return $this -> theRepository -> destroy( $theShop );
    }
}
