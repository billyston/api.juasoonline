<?php

namespace App\Repositories\ProductService\Store;

use App\Http\Requests\ProductService\Store\BranchRequest;

interface BranchRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index() : array;

    /**
     * @param BranchRequest $branchRequest
     * @return array|mixed
     */
    public function store( BranchRequest $branchRequest ) : array;

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function show( $theBranch ) : array;

    /**
     * @param BranchRequest $branchRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function update( BranchRequest $branchRequest, $theBranch ) : array;

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function destroy( $theBranch ) : array;
}
