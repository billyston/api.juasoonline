<?php

namespace App\Services\ProductService\Product\Category;

use App\Traits\ExternalService;

class CategoryService
{
    use ExternalService;
    private $baseURL;

    /**
     * CategoryService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'categories';
    }

    /**
     * @return array|mixed
     */
    public function getAll() : array
    {
        return $this -> getAllRequest( $this -> baseURL );
    }

    /**
     * @param $theCategory
     * @return array|mixed
     */
    public function getCategory( $theCategory ) : array
    {
        return $this -> getRequest( $this -> baseURL . "/" . $theCategory  );
    }
}
