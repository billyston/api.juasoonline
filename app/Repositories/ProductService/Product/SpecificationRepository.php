<?php

namespace App\Repositories\ProductService\Product;

use App\Http\Requests\ProductService\Product\SpecificationRequest;
use App\Services\ProductService\Product\SpecificationService;

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
     * @return array|mixed
     */
    public function index(): array
    {
        return $this -> theService -> getAll();
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
     * @param SpecificationRequest $specificationRequest
     * @return array|mixed
     */
    public function store( SpecificationRequest $specificationRequest ): array
    {
        return $this -> theService -> createSpecification( $specificationRequest );
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
