<?php

namespace App\Http\Controllers\ProductService\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Product\SpecificationRequest;
use App\Repositories\ProductService\Product\SpecificationRepositoryInterface;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    private $theRepository;

    /**
     * SpecificationController constructor.
     * @param SpecificationRepositoryInterface $specificationRepository
     */
    public function __construct( SpecificationRepositoryInterface $specificationRepository )
    {
        $this -> theRepository = $specificationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> theRepository -> index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SpecificationRequest $specificationRequest
     * @return array|mixed
     */
    public function store( SpecificationRequest $specificationRequest ) : array
    {
        return $this -> theRepository -> store( $specificationRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theSpecification
     * @return array|mixed
     */
    public function show( $theSpecification ) : array
    {
        return $this -> theRepository -> show( $theSpecification );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SpecificationRequest $specificationRequest
     * @param $theSpecification
     * @return array|mixed
     */
    public function update( SpecificationRequest $specificationRequest, $theSpecification ) : array
    {
        return $this -> theRepository -> update( $specificationRequest, $theSpecification );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theSpecification
     * @return array|mixed
     */
    public function destroy( $theSpecification ) : array
    {
        return $this -> theRepository -> destroy( $theSpecification );
    }
}
