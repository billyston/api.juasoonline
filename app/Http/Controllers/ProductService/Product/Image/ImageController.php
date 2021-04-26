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
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ) : array
    {
        return $this -> theRepository -> index( $theProduct );
    }

    /**
     * Store a newly created resource in storage.
     * @param $theProduct
     * @param ImageRequest $imageRequest
     * @return array|mixed
     */
    public function store( $theProduct, ImageRequest $imageRequest ) : array
    {
        return $this -> theRepository -> store( $theProduct, $imageRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theProduct
     * @param $theImage
     * @return array
     */
    public function show( $theProduct, $theImage ) : array
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theProduct
     * @param ImageRequest $imageRequest
     * @param $theImage
     * @return array
     */
    public function update( $theProduct, ImageRequest $imageRequest, $theImage ) : array
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theProduct
     * @param $theImage
     * @return array
     */
    public function destroy( $theProduct, $theImage ) : array
    {
        //
    }
}
