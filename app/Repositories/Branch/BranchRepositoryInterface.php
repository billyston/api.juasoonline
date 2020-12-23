<?php

namespace App\Repositories\Branch;

use App\Http\Requests\Branch\BranchRequest;

interface BranchRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param BranchRequest $branchRequest
     * @return mixed
     */
    public function store( BranchRequest $branchRequest );

    /**
     * @param $theBranch
     * @return mixed
     */
    public function show( $theBranch );

    /**
     * @param BranchRequest $branchRequest
     * @param $theBranch
     * @return mixed
     */
    public function update( BranchRequest $branchRequest, $theBranch );

    /**
     * @param $theBranch
     * @return mixed
     */
    public function destroy( $theBranch );
}
