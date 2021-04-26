<?php

namespace App\Http\Controllers\ProductService\Product\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Product\Color\ColorRequest;
use App\Repositories\ProductService\Product\Color\ColorRepositoryInterface;

class ColorController extends Controller
{
    private $theRepository;

    /**
     * OverviewController constructor.
     * @param ColorRepositoryInterface $colorRepository
     */
    public function __construct( ColorRepositoryInterface $colorRepository )
    {
        $this -> theRepository = $colorRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $theProduct
     * @return array
     */
    public function index( $theProduct ) : array
    {
        return $this -> theRepository -> index( $theProduct );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $theProduct
     * @param ColorRequest $colorRequest
     * @return array
     */
    public function store( $theProduct, ColorRequest $colorRequest ) : array
    {
        return $this -> theRepository -> store( $theProduct, $colorRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theProduct
     * @param $theColor
     * @return array
     */
    public function show( $theProduct, $theColor ) : array
    {
        return $this -> theRepository -> show( $theProduct, $theColor );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theProduct
     * @param ColorRequest $colorRequest
     * @param $theColor
     * @return array
     */
    public function update( $theProduct, ColorRequest $colorRequest, $theColor ) : array
    {
        return $this -> theRepository -> update( $theProduct, $colorRequest, $theColor );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theProduct
     * @param $theColor
     * @return array
     */
    public function destroy( $theProduct, $theColor ) : array
    {
        return $this -> theRepository -> destroy( $theProduct, $theColor );
    }
}
