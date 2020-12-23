<?php

namespace App\Repositories\Branch;

use App\Http\Requests\Branch\BranchRequest;
use App\Services\Branch\BranchService;

class BranchRepository implements BranchRepositoryInterface
{
    private $branchService;

    /**
     * ShopRepository constructor.
     * @param BranchService $branchService
     */
    public function __construct( BranchService $branchService )
    {
        $this -> branchService = $branchService;
    }

    public function index()
    {
        return $this -> branchService -> getAll();
    }

    public function store( BranchRequest $branchRequest )
    {
        return $this -> branchService -> createBranch( $branchRequest );
    }

    public function show( $theBranch )
    {
        return $this -> branchService -> getBranch( $theBranch );
    }

    public function update( BranchRequest $branchRequest, $theBranch )
    {
        return $this -> branchService -> updateBranch( $branchRequest, $theBranch );
    }

    public function destroy( $theBranch )
    {
        return $this -> branchService -> deleteBranch( $theBranch );
    }
}
