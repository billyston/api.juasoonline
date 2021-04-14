<?php

namespace App\Repositories\ProductService\Product\Overview;

use App\Http\Requests\ProductService\Product\Overview\OverviewRequest;

interface OverviewRepositoryInterface
{
    /**
     * @param $theProduct
     * @return array
     */
    public function index( $theProduct ): array;

    /**
     * @param OverviewRequest $overviewRequest
     * @param $theProduct
     * @return array
     */
    public function store( OverviewRequest $overviewRequest, $theProduct ): array;

    /**
     * @param $theOverview
     * @return array
     */
    public function show( $theOverview ): array;

    /**
     * @param OverviewRequest $overviewRequest
     * @param $theOverview
     * @return array
     */
    public function update( OverviewRequest $overviewRequest, $theOverview ): array;

    /**
     * @param $theOverview
     * @return array
     */
    public function destroy( $theOverview ): array;
}
