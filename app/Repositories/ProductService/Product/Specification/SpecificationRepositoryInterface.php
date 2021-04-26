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
     * @param $theProduct
     * @param $theSpecification
     * @return array|mixed
     */
    public function show( $theProduct, $theSpecification ): array;

    /**
     * @param $theProduct
     * @param SpecificationRequest $specificationRequest
     * @return array|mixed
     */
    public function store( $theProduct, SpecificationRequest $specificationRequest ): array;

    /**
     * @param $theProduct
     * @param SpecificationRequest $specificationRequest
     * @param $theSpecification
     * @return array|mixed
     */
    public function update( $theProduct, SpecificationRequest $specificationRequest, $theSpecification ): array;

    /**
     * @param $theProduct
     * @param $theSpecification
     * @return array
     */
    public function destroy( $theProduct, $theSpecification ): array;
}
