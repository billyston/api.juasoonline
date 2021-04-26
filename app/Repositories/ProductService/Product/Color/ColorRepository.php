<?php

namespace App\Repositories\ProductService\Product\Color;

use App\Http\Requests\ProductService\Product\Color\ColorRequest;
use App\Services\ProductService\Product\Color\ColorService;

class ColorRepository implements ColorRepositoryInterface
{
    private $theService;

    /**
     * ColorRepository constructor.
     * @param ColorService $colorService
     */
    public function __construct( ColorService $colorService )
    {
        return $this -> theService = $colorService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $theProduct
     * @return array
     */
    public function index( $theProduct ) : array
    {
        return $this -> theService -> getAll( $theProduct );
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
        return $this -> theService -> createColor( $theProduct, $colorRequest );
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
        return $this -> theService -> getColor( $theProduct, $theColor );
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
        return $this -> theService -> updateColor( $theProduct, $colorRequest, $theColor );
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
        return $this -> theService -> deleteColor( $theProduct, $theColor );
    }
}
