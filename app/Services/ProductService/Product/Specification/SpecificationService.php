<?php

namespace App\Services\ProductService\Product\Specification;

use App\Traits\ExternalService;

class SpecificationService
{
    use ExternalService;
    private $baseURL;

    /**
     * SpecificationService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'product/';
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function getAll( $theProduct ) : array
    {
        return $this -> getAllRequest( $this -> baseURL . $theProduct . '/specifications' );
    }

    /**
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function createSpecification( $theProduct, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theProduct . '/specifications', $theRequest );
    }

    /**
     * @param $theProduct
     * @param $theSpecification
     * @return array|mixed
     */
    public function getSpecification( $theProduct, $theSpecification ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theProduct . '/specifications/' . $theSpecification  );
    }

    /**
     * @param $theProduct
     * @param $theRequest
     * @param $theSpecification
     * @return array|mixed
     */
    public function updateSpecification( $theProduct, $theRequest, $theSpecification ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theProduct . '/specifications/' . $theSpecification, $theRequest  );
    }

    /**
     * @param $theProduct
     * @param $theSpecification
     * @return array|mixed
     */
    public function deleteSpecification( $theProduct, $theSpecification ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theProduct . '/specifications/' . $theSpecification  );
    }
}
