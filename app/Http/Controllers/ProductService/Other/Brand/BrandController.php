<?php

namespace App\Http\Controllers\ProductService\Other\Brand;

use App\Http\Controllers\Controller;
use App\Repositories\ProductService\Other\Brand\BrandRepositoryInterface;

class BrandController extends Controller
{
    private $theRepository;

    public function __construct( BrandRepositoryInterface $brandRepository )
    {
        $this -> theRepository = $brandRepository;
    }

    /**
     * Display a listing of the resource.
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> theRepository -> index();
    }

    /**
     * Display the specified resource.
     * @param $theBrand
     * @return array|mixed
     */
    public function show( $theBrand ) : array
    {
        return $this -> theRepository -> show( $theBrand );
    }
}
