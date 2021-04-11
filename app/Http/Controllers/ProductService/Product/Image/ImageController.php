<?php

namespace App\Http\Controllers\ProductService\Product\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Product\Image\ImageRequest;
use App\Repositories\ProductService\Product\Image\ImageRepositoryInterface;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    private $theRepository;

    /**
     * ImageController constructor.
     * @param ImageRepositoryInterface $imageRepository
     */
    public function __construct( ImageRepositoryInterface $imageRepository )
    {
        $this -> theRepository = $imageRepository;
    }

    /**
     * Display a listing of the resource.
     * @param $product
     * @return array|mixed
     */
    public function index( $product ) : array
    {
        return $this -> theRepository -> index( $product );
    }

    /**
     * Store a newly created resource in storage.
     * @param ImageRequest $imageRequest
     * @param $product
     * @return array|mixed
     */
    public function store( ImageRequest $imageRequest, $product ) : array
    {
        return $this -> theRepository -> store( $imageRequest, $product );
    }

    /**
     * Display the specified resource.
     *
     * @param $product
     * @return array
     */
    public function show( $product ) : array
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ImageRequest $imageRequest
     * @param $product
     * @return array
     */
    public function update( ImageRequest $imageRequest, $product ) : array
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $product
     * @return array
     */
    public function destroy( $product ) : array
    {
        //
    }
}
