<?php

namespace App\Repositories\ProductService;

use App\Http\Requests\ProductService\BranchRequest;
use App\Services\ProductService\BranchService;

class BranchRepository implements BranchRepositoryInterface
{
    private $branchService;

    /**
     * StoreRepository constructor.
     * @param BranchService $branchService
     */
    public function __construct( BranchService $branchService )
    {
        $this -> branchService = $branchService;
    }

    /**
     * @return array|mixed
     */
    public function index()
    {
        return $this -> branchService -> getAll();
    }

    /**
     * @param BranchRequest $branchRequest
     * @return array|mixed
     */
    public function store( BranchRequest $branchRequest )
    {
        return $this -> branchService -> createBranch( $branchRequest );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function show( $theBranch )
    {
        return $this -> branchService -> getBranch( $theBranch );
    }

    /**
     * @param BranchRequest $branchRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function update( BranchRequest $branchRequest, $theBranch )
    {
        return $this -> branchService -> updateBranch( $branchRequest, $theBranch );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function destroy( $theBranch )
    {
        return $this -> branchService -> deleteBranch( $theBranch );
    }
}
