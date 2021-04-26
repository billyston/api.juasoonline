<?php

namespace App\Repositories\ProductService\Store\Branch;

use App\Http\Requests\ProductService\Store\Branch\BranchRequest;

interface BranchRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index( $theStore ) : array;

    /**
     * @param $theStore
     * @param BranchRequest $branchRequest
     * @return array|mixed
     */
    public function store( $theStore, BranchRequest $branchRequest ) : array;

    /**
     * @param $theStore
     * @param $theBranch
     * @return array|mixed
     */
    public function show( $theStore, $theBranch ) : array;

    /**
     * @param $theStore
     * @param BranchRequest $branchRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function update( $theStore, BranchRequest $branchRequest, $theBranch ) : array;

    /**
     * @param $theStore
     * @param $theBranch
     * @return array|mixed
     */
    public function destroy( $theStore, $theBranch ) : array;
}
