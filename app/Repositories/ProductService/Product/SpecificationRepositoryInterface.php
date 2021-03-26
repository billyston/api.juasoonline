<?php

namespace App\Repositories\ProductService\Product;

use App\Http\Requests\ProductService\Product\SpecificationRequest;

interface SpecificationRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index(): array;

    /**
     * @param $theSpecification
     * @return array|mixed
     */
    public function show( $theSpecification ): array;

    /**
     * @param SpecificationRequest $specificationRequest
     * @param $theSpecification
     * @return array|mixed
     */
    public function store( SpecificationRequest $specificationRequest ): array;

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
