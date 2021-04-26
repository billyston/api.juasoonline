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
    public function store( $theProduct, OverviewRequest $overviewRequest ): array;

    /**
     * @param $theProduct
     * @param $theOverview
     * @return array
     */
    public function show( $theProduct, $theOverview ): array;

    /**
     * @param $theProduct
     * @param OverviewRequest $overviewRequest
     * @param $theOverview
     * @return array
     */
    public function update( $theProduct, OverviewRequest $overviewRequest, $theOverview ): array;

    /**
     * @param $theProduct
     * @param $theOverview
     * @return array
     */
    public function destroy( $theProduct, $theOverview ): array;
}
