<?php

namespace App\Repositories\Juasoonline;

use App\Services\Juasoonline\JuasoonlineService;
use Illuminate\Http\Request;

class JuasoonlineRepository implements JuasoonlineRepositoryInterface
{
    private JuasoonlineService $juasoonlineService;

    /**
     * JuasoonlineRepository constructor.
     * @param JuasoonlineService $juasoonlineService
     */
    public function __construct( JuasoonlineService $juasoonlineService )
    {
        return $this -> juasoonlineService = $juasoonlineService;
    }

    /**
     * @return array|mixed
     */
    public function products() : array
    {
        return $this -> juasoonlineService -> getProducts();
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function product( $theProduct ) : array
    {
        return $this -> juasoonlineService -> getProduct( $theProduct );
    }

    /**
     * @param Request $request
     * @return array
     */
    public function recommendations( Request $request ) : array
    {
        return $this -> juasoonlineService -> getRecommendations( $request );
    }

    /**
     * @return array|mixed
     */
    public function storeProducts( $theStore ) : array
    {
        return $this -> juasoonlineService -> getStoreProducts( $theStore );
    }

    /**
     * @return array|mixed
     */
    public function deals() : array
    {
        return $this -> juasoonlineService -> getDeals();
    }
}
