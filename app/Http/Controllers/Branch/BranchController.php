<?php

namespace App\Http\Controllers\Branch;

use App\Http\Controllers\Controller;
use App\Http\Requests\Branch\BranchRequest;
use App\Repositories\Branch\BranchRepositoryInterface;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    private $theRepository;

    /**
     * ShopController constructor.
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
