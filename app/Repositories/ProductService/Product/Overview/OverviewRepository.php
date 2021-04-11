<?php

namespace App\Repositories\ProductService\Product\Overview;

use App\Http\Requests\ProductService\Product\Overview\OverviewRequest;
use App\Services\ProductService\Product\Overview\OverviewService;

class OverviewRepository implements OverviewRepositoryInterface
{
    private $theOverviewService;

    /**
     * OverviewRepository constructor.
     * @param OverviewService $overviewService
     */
    public function __construct( OverviewService $overviewService )
    {
        $this -> theOverviewService = $overviewService;
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ) : array
    {
        return $this -> theOverviewService -> getAll( $theProduct );
    }

    /**
     * @param OverviewRequest $overviewRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function store( OverviewRequest $overviewRequest, $theProduct ) : array
    {
        $data = array( 'type' => 'Overview', 'overviews' => array( 'data' => []), 'relationships' => array( 'product' => array( 'product_id' => $overviewRequest['product_id'] )));
        for( $i = 0; $i <  count($overviewRequest['title']); $i++  )
        {
            $file =  $overviewRequest['file'][$i] -> store('products/images/overviews');
            array_push( $data['overviews']['data'], array( 'title' => $overviewRequest['title'][$i], 'description' => $overviewRequest['description'][$i], 'file' => $file ) );
        }
        return $this -> theOverviewService -> createOverview( $data, $theProduct );
    }

    /**
     * @param $theOverview
     * @return array|mixed
     */
    public function show( $theOverview ) : array
    {
        return $this -> theOverviewService -> getOverview( $theOverview );
    }

    /**
     * @param OverviewRequest $overviewRequest
     * @param $theOverview
     * @return array
     */
    public function update( OverviewRequest $overviewRequest, $theOverview ) : array
    {
        return $this -> theOverviewService -> updateOverview( $overviewRequest, $theOverview );
    }

    /**
     * @param $theOverview
     * @return array
     */
    public function destroy( $theOverview ) : array
    {
        return $this -> theOverviewService -> deleteOverview( $theOverview );
    }
}
