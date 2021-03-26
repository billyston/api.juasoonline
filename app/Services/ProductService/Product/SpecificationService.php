<?php

namespace App\Services\ProductService\Product;

use App\Traits\ExternalService;

class SpecificationService
{
    use ExternalService;
    private $baseURL = "http://products.juasoonline.dev/products/specifications";

    /**
     * @return array|mixed
     */
    public function getAll() : array
    {
        return $this -> getRequest( $this -> baseURL );
    }

    /**
     * @param $theRequest
     * @return array|mixed
     */
    public function createSpecification( $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theSpecification
     * @return array|mixed
     */
    public function getSpecification( $theSpecification ) : array
    {
        return $this -> getRequest( $this -> baseURL, $theSpecification  );
    }

    /**
     * @param $theRequest
     * @param $theSpecification
     * @return array|mixed
     */
    public function updateSpecification( $theRequest, $theSpecification ) : array
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theSpecification  );
    }

    /**
     * @param $theSpecification
     * @return array|mixed
     */
    public function deleteSpecification( $theSpecification ) : array
    {
        return $this -> deleteRequest( $this -> baseURL, $theSpecification  );
    }
}
