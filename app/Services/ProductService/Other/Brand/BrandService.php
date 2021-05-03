<?php

namespace App\Services\ProductService\Other\Brand;

use App\Traits\ExternalService;

class BrandService
{
    use ExternalService;
    private $baseURL;

    /**
     * CategoryService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'brands';
    }

    /**
     * @return array|mixed
     */
    public function getAll() : array
    {
        return $this -> getAllRequest( $this -> baseURL );
    }

    /**
     * @param $theBrand
     * @return array|mixed
     */
    public function getBrand( $theBrand ) : array
    {
        return $this -> getRequest( $this -> baseURL . "/" . $theBrand  );
    }
}
