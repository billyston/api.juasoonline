<?php

namespace App\Http\Controllers\ProductService\Product\Size;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Product\Size\SizeRequest;
use App\Repositories\ProductService\Product\Size\SizeRepositoryInterface;

class SizeController extends Controller
{
    private $theRepository;

    /**
     * OverviewController constructor.
     * @param SizeRepositoryInterface $sizeRepository
     */
    public function __construct( SizeRepositoryInterface $sizeRepository )
    {
        $this -> theRepository = $sizeRepository;
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
     * @param SizeRequest $sizeRequest
     * @return array
     */
    public function store( $theProduct, SizeRequest $sizeRequest ) : array
    {
        return $this -> theRepository -> store( $theProduct, $sizeRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theProduct
     * @param $theSize
     * @return array
     */
    public function show( $theProduct, $theSize ) : array
    {
        return $this -> theRepository -> show( $theProduct, $theSize );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theProduct
     * @param SizeRequest $sizeRequest
     * @param $theSize
     * @return array
     */
    public function update( $theProduct, SizeRequest $sizeRequest, $theSize ) : array
    {
        return $this -> theRepository -> update( $theProduct, $sizeRequest, $theSize );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theProduct
     * @param $theSize
     * @return array
     */
    public function destroy( $theProduct, $theSize ) : array
    {
        return $this -> theRepository -> destroy( $theProduct, $theSize );
    }
}
