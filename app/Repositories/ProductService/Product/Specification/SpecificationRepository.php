<?php

namespace App\Repositories\ProductService\Product\Specification;

use App\Http\Requests\ProductService\Product\Specification\SpecificationRequest;
use App\Services\ProductService\Product\Specification\SpecificationService;

class SpecificationRepository implements SpecificationRepositoryInterface
{
    private $theService;

    /**
     * SpecificationRepository constructor.
     * @param SpecificationService $specificationService
     */
    public function __construct( SpecificationService $specificationService )
    {
        return $this -> theService = $specificationService;
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ): array
    {
        return $this -> theService -> getAll( $theProduct );
    }

    /**
     * @param $theSpecification
     * @return array|mixed
     */
    public function show( $theSpecification ): array
    {
        return $this -> theService -> getSpecification( $theSpecification );
    }

    /**
     * @param $theProduct
     * @param SpecificationRequest $specificationRequest
     * @return array|mixed
     */
    public function store( $theProduct, SpecificationRequest $specificationRequest ): array
    {
        return $this -> theService -> createSpecification( $theProduct, $specificationRequest );
    }

    /**
     * @param SpecificationRequest $specificationRequest
     * @param $theSpecification
     * @return array|mixed
     */
    public function update( SpecificationRequest $specificationRequest, $theSpecification ): array
    {
        return $this -> theService -> updateSpecification( $specificationRequest, $theSpecification );
    }

    /**
     * @param $theSpecification
     * @return array
     */
    public function destroy( $theSpecification ): array
    {
        return $this -> theService -> deleteSpecification( $theSpecification );
    }
}
