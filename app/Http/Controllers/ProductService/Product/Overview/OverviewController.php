<?php

namespace App\Http\Controllers\ProductService\Product\Overview;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Product\Overview\OverviewRequest;
use App\Repositories\ProductService\Product\Overview\OverviewRepositoryInterface;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    private $theRepository;

    /**
     * OverviewController constructor.
     * @param OverviewRepositoryInterface $overviewRepository
     */
    public function __construct( OverviewRepositoryInterface $overviewRepository )
    {
        $this -> theRepository = $overviewRepository;
    }

    /**
     * Display a listing of the resource.
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ) : array
    {
        return $this -> theRepository -> index( $theProduct );
    }

    /**
     * Store a newly created resource in storage.
     * @param OverviewRequest $overviewRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function store( OverviewRequest $overviewRequest, $theProduct ) : array
    {
        return $this -> theRepository -> store( $overviewRequest, $theProduct );
    }

    /**
     * Display the specified resource.
     * @param $theOverview
     * @return array|mixed
     */
    public function show( $theOverview ) : array
    {
        return $this -> theRepository -> show( $theOverview );
    }

    /**
     * Update the specified resource in storage.
     * @param OverviewRequest $overviewRequest
     * @param $theOverview
     * @return array|mixed
     */
    public function update( OverviewRequest $overviewRequest, $theOverview ) : array
    {
        return $this -> theRepository -> update( $overviewRequest, $theOverview );
    }

    /**
     * Remove the specified resource from storage.
     * @param $theOverview
     * @return array|mixed
     */
    public function destroy( $theOverview ) : array
    {
        return $this -> theRepository -> destroy( $theOverview );
    }
}
