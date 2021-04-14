<?php

namespace App\Repositories\ProductService\Product\Specification;

use App\Http\Requests\ProductService\Product\Specification\SpecificationRequest;

interface SpecificationRepositoryInterface
{
    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ): array;

    /**
     * @param $theSpecification
     * @return array|mixed
     */
    public function show( $theSpecification ): array;

    /**
     * @param $theProduct
     * @param SpecificationRequest $specificationRequest
     * @return array|mixed
     */
    public function store( $theProduct, SpecificationRequest $specificationRequest ): array;

    /**
     * @param SpecificationRequest $specificationRequest
     * @param $theSpecification
     * @return array|mixed
     */
    public function update( SpecificationRequest $specificationRequest, $theSpecification ): array;

    /**
     * @param $theSpecification
     * @return array
     */
    public function destroy( $theSpecification ): array;
}
