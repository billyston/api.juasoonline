<?php

namespace App\Repositories\ProductService\Product\Size;

use App\Http\Requests\ProductService\Product\Size\SizeRequest;
use App\Services\ProductService\Product\Size\SizeService;

class SizeRepository implements SizeRepositoryInterface
{
    private $theService;

    /**
     * SizeRepository constructor.
     * @param SizeService $sizeService
     */
    public function __construct( SizeService $sizeService )
    {
        $this -> theService = $sizeService;
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
     * @param SizeRequest $sizeRequest
     * @return array
     */
    public function store( $theProduct, SizeRequest $sizeRequest ) : array
    {
        return $this -> theService -> createSize( $theProduct, $sizeRequest );
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
        return $this -> theService -> getSize( $theProduct, $theSize );
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
        return $this -> theService -> updateSize( $theProduct, $sizeRequest, $theSize );
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
        return $this -> theService -> deleteSize( $theProduct, $theSize );
    }
}
