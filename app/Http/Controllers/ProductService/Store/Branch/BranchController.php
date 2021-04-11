<?php

namespace App\Http\Controllers\ProductService\Store\Branch;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Store\Branch\BranchRequest;
use App\Repositories\ProductService\Store\Branch\BranchRepositoryInterface;

class BranchController extends Controller
{
    private $theRepository;

    /**
     * StoreController constructor.
     * @param BranchRepositoryInterface $branchRepository
     */
    public function __construct( BranchRepositoryInterface $branchRepository )
    {
        $this -> theRepository = $branchRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param BranchRequest $branchRequest
     * @return mixed
     */
    public function store( BranchRequest $branchRequest )
    {
        return $this -> theRepository -> store( $branchRequest );
    }

    /**
     * @param $theBranch
     * @return mixed
     */
    public function show( $theBranch )
    {
        return $this -> theRepository -> show( $theBranch );
    }

    /**
     * @param BranchRequest $branchRequest
     * @param $theBranch
     * @return mixed
     */
    public function update( BranchRequest $branchRequest, $theBranch )
    {
        return $this -> theRepository -> update( $branchRequest, $theBranch );
    }

    /**
     * @param $theBranch
     * @return mixed
     */
    public function destroy( $theBranch )
    {
        return $this -> theRepository -> destroy( $theBranch );
    }
}
