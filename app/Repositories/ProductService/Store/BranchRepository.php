<?php

namespace App\Repositories\ProductService\Store;

use App\Http\Requests\ProductService\Store\BranchRequest;
use App\Services\ProductService\Store\BranchService;

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
    public function index() : array
    {
        return $this -> branchService -> getAll();
    }

    /**
     * @param BranchRequest $branchRequest
     * @return array|mixed
     */
    public function store( BranchRequest $branchRequest ) : array
    {
        return $this -> branchService -> createBranch( $branchRequest );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function show( $theBranch ) : array
    {
        return $this -> branchService -> getBranch( $theBranch );
    }

    /**
     * @param BranchRequest $branchRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function update( BranchRequest $branchRequest, $theBranch ) : array
    {
        return $this -> branchService -> updateBranch( $branchRequest, $theBranch );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function destroy( $theBranch ) : array
    {
        return $this -> branchService -> deleteBranch( $theBranch );
    }
}
