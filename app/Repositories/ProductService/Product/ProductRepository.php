<?php

namespace App\Repositories\ProductService\Product;

use App\Http\Requests\ProductService\Product\ProductRequest;
use App\Services\ProductService\Product\ProductService;

class ProductRepository implements ProductRepositoryInterface
{
    private ProductService $productService;

    /**
     * ProductRepository constructor.
     * @param ProductService $productService
     */
    public function __construct( ProductService $productService )
    {
        return $this -> productService = $productService;
    }

    /**
     * @param $theStore
     * @return array|mixed
     */
    public function index( $theStore ) : array
    {
        return $this -> productService -> getAll( $theStore );
    }

    /**
     * @param ProductRequest $productRequest
     * @param $theStore
     * @return array|mixed
     */
    public function store( $theStore, ProductRequest $productRequest ) : array
    {
        $data = array('type' => 'Product', 'attributes' => array('name' => $productRequest['name'], 'quantity' => $productRequest['quantity'], 'price' => $productRequest['price'], 'brand_id' => 1, 'sales_price' => $productRequest['sales_price'], 'description' => $productRequest['description']), 'relationships' => array('store' => array('store_id' => $productRequest['store_id']), 'charge' => array('charge_id' => $productRequest['charge_id']), 'categories' => array('data' => array()), 'specifications' => array('data' => array()), 'images' => array('data' => array()), 'overviews' => array('data' => array()), 'colors' => array('data' => array()), 'sizes' => array('data' => array())));

        // Check if product has categories
        for( $i = 0; $i <  count($productRequest['categories']); $i++  )
        {
            array_push( $data['relationships']['categories']['data'], array('type' => 'Category', 'category_id' => $productRequest['categories'][$i]) );
        }

        // Check if product has specifications
        for( $i = 0; $i <  count($productRequest['specifications']); $i++  )
        {
            array_push( $data['relationships']['specifications']['data'], array('type' => 'Specification', 'specification' => $productRequest['specifications'][$i], 'value' => $productRequest['specification_value'][$i] ) );
        }

        // Check if product has images
        for( $i = 0; $i <  count($productRequest['product_image_descriptions']); $i++  )
        {
            $image =  $productRequest['product_images'][$i] -> store( env( 'DO_SOURCE_FOLDER').'products');
            array_push( $data['relationships']['images']['data'], array('type' => 'Image', 'description' => $productRequest['product_image_descriptions'][$i], 'image' => env( 'DO_SPACES_PATH' ) . $image ));
        }

        // Check if product has overviews
        for( $i = 0; $i <  count($productRequest['overview_titles']); $i++  )
        {
            $image =  $productRequest['overview_images'][$i] -> store(env( 'DO_SOURCE_FOLDER').'overviews');
            array_push( $data['relationships']['overviews']['data'], array('type' => 'Overview', 'title' => $productRequest['overview_titles'][$i], 'description' => $productRequest['product_image_descriptions'][$i], 'image' => env( 'DO_SPACES_PATH' ) . $image ));
        }

        // Check if product has colors
        for( $i = 0; $i <  count($productRequest['colors']); $i++  )
        {
            $image =  $productRequest['color_images'][$i] -> store( env( 'DO_SOURCE_FOLDER').'colors');
            array_push( $data['relationships']['colors']['data'], array('type' => 'Color', 'color' => $productRequest['colors'][$i], 'image' => env( 'DO_SPACES_PATH' ) . $image ));
        }

        // Check if product has sizes
        for( $i = 0; $i <  count($productRequest['sizes']); $i++  )
        {
            array_push( $data['relationships']['sizes']['data'], array('type' => 'Size', 'size' => $productRequest['sizes'][$i], 'description' => $productRequest['size_descriptions'][$i]));
        }

        return $this -> productService -> createProduct( $theStore, $data );
    }

    /**
     * @param $theStore
     * @param $theProduct
     * @return array|mixed
     */
    public function show( $theStore, $theProduct ) : array
    {
        return $this -> productService -> getProduct( $theStore, $theProduct );
    }

    /**
     * @param $theStore
     * @param ProductRequest $productRequest
     * @param $Product
     * @return array|mixed
     */
    public function update( $theStore, ProductRequest $productRequest, $Product ) : array
    {
        return $this -> productService -> updateProduct( $theStore, $productRequest, $Product );
    }

    /**
     * @param $theStore
     * @param $Product
     * @return array|mixed
     */
    public function destroy( $theStore, $Product ) : array
    {
        return $this -> productService -> deleteProduct( $theStore, $Product );
    }
}
