<?php

namespace App\Repositories\ProductService\Store\Branch;

use App\Http\Requests\ProductService\Store\Branch\BranchRequest;
use App\Services\ProductService\Store\Branch\BranchService;

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
    public function index( $theStore ) : array
    {
        return $this -> branchService -> getAll( $theStore );
    }

    /**
     * @param BranchRequest $branchRequest
     * @return array|mixed
     */
    public function store( $theStore, BranchRequest $branchRequest ) : array
    {
        return $this -> branchService -> createBranch( $theStore, $branchRequest );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function show( $theStore, $theBranch ) : array
    {
        return $this -> branchService -> getBranch( $theStore, $theBranch );
    }

    /**
     * @param BranchRequest $branchRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function update( $theStore, BranchRequest $branchRequest, $theBranch ) : array
    {
        return $this -> branchService -> updateBranch( $theStore, $branchRequest, $theBranch );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function destroy( $theStore, $theBranch ) : array
    {
        return $this -> branchService -> deleteBranch( $theStore, $theBranch );
    }
}
