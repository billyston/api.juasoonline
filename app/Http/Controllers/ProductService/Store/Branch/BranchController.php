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
    public function index( $theStore )
    {
        return $this -> theRepository -> index( $theStore );
    }

    /**
     * @param $theStore
     * @param BranchRequest $branchRequest
     * @return mixed
     */
    public function store( $theStore, BranchRequest $branchRequest )
    {
        return $this -> theRepository -> store( $theStore, $branchRequest );
    }

    /**
     * @param $theStore
     * @param $theBranch
     * @return mixed
     */
    public function show( $theStore, $theBranch )
    {
        return $this -> theRepository -> show( $theStore, $theBranch );
    }

    /**
     * @param $theStore
     * @param BranchRequest $branchRequest
     * @param $theBranch
     * @return mixed
     */
    public function update( $theStore, BranchRequest $branchRequest, $theBranch )
    {
        return $this -> theRepository -> update( $theStore, $branchRequest, $theBranch );
    }

    /**
     * @param $theStore
     * @param $theBranch
     * @return mixed
     */
    public function destroy( $theStore, $theBranch )
    {
        return $this -> theRepository -> destroy( $theStore, $theBranch );
    }
}
