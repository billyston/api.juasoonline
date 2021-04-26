<?php

namespace App\Repositories\ProductService\Product\Color;

use App\Http\Requests\ProductService\Product\Color\ColorRequest;

interface ColorRepositoryInterface
{
    /**
     * Display a listing of the resource.
     *
     * @param $theProduct
     * @return array
     */
    public function index( $theProduct ) : array;

    /**
     * Store a newly created resource in storage.
     *
     * @param $theProduct
     * @param ColorRequest $colorRequest
     * @return array
     */
    public function store( $theProduct, ColorRequest $colorRequest ) : array;

    /**
     * Display the specified resource.
     *
     * @param $theProduct
     * @param $theColor
     * @return array
     */
    public function show( $theProduct, $theColor ) : array;

    /**
     * Update the specified resource in storage.
     *
     * @param $theProduct
     * @param ColorRequest $colorRequest
     * @param $theColor
     * @return array
     */
    public function update( $theProduct, ColorRequest $colorRequest, $theColor ) : array;

    /**
     * Remove the specified resource from storage.
     *
     * @param $theProduct
     * @param $theColor
     * @return array
     */
    public function destroy( $theProduct, $theColor ) : array;
}
