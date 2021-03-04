<?php

namespace App\Http\Controllers\ProductService;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\StoreRequest;
use App\Repositories\ProductService\StoreRepositoryInterface;

class StoreController extends Controller
{
    private $theRepository;

    /**
     * StoreController constructor.
     * @param StoreRepositoryInterface $shopRepository
     */
    public function __construct(StoreRepositoryInterface $shopRepository )
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
     * @param StoreRequest $shopRequest
     * @return mixed
     */
    public function store(StoreRequest $shopRequest )
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
     * @param StoreRequest $shopRequest
     * @param $theShop
     * @return mixed
     */
    public function update(StoreRequest $shopRequest, $theShop )
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
