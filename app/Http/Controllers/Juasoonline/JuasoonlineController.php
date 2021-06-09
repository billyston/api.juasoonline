<?php

namespace App\Http\Controllers\Juasoonline;

use App\Http\Controllers\Controller;
use App\Repositories\Juasoonline\JuasoonlineRepositoryInterface;
use Illuminate\Http\Request;

class JuasoonlineController extends Controller
{
    private JuasoonlineRepositoryInterface $theRepository;

    /**
     * JuasoonlineController constructor.
     * @param JuasoonlineRepositoryInterface $juasoonlineRepository
     */
    public function __construct( JuasoonlineRepositoryInterface $juasoonlineRepository )
    {
        $this -> theRepository = $juasoonlineRepository;
    }

    /**
     * @return array|mixed
     */
    public function products() : array
    {
        return $this -> theRepository -> products();
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function product( $theProduct ) : array
    {
        return $this -> theRepository -> product( $theProduct );
    }

    /**
     * @param Request $request
     * @return array|mixed
     */
    public function recommendations( Request $request ) : array
    {
        return $this -> theRepository -> recommendations( $request );
    }

    /**
     * @param $theStore
     * @return array|mixed
     */
    public function storeProducts( $theStore ) : array
    {
        return $this -> theRepository -> storeProducts( $theStore );
    }

    /**
     * @return array|mixed
     */
    public function deals() : array
    {
        return $this -> theRepository -> deals();
    }

    /**
     * @return array|mixed
     */
    public function storeAds() : array
    {
        return $this -> theRepository -> storeAds();
    }

    /**
     * @return array|mixed
     */
    public function categories() : array
    {
        return $this -> theRepository -> categories();
    }


}
