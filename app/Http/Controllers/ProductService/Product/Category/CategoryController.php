<?php

namespace App\Http\Controllers\ProductService\Product\Category;

use App\Http\Controllers\Controller;
use App\Repositories\ProductService\Product\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $theRepository;

    public function __construct( CategoryRepositoryInterface $categoryRepository )
    {
        $this -> theRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> theRepository -> index();
    }

    /**
     * Display the specified resource.
     * @param $theCategory
     * @return array|mixed
     */
    public function show( $theCategory ) : array
    {
        return $this -> theRepository -> show( $theCategory );
    }
}
