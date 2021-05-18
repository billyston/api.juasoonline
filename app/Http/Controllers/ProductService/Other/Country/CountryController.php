<?php

namespace App\Http\Controllers\ProductService\Other\Country;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Other\Country\CountryRequest;
use App\Repositories\ProductService\Other\Country\CountryRepositoryInterface;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    private $theRepository;

    public function __construct( CountryRepositoryInterface $countryRepository )
    {
        $this -> theRepository = $countryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> theRepository -> index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CountryRequest $countryRequest
     * @return array|mixed
     */
    public function store( CountryRequest $countryRequest ) : array
    {
        return $this -> theRepository -> store( $countryRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $Country
     * @return array|mixed
     */
    public function show( $Country ) : array
    {
        return $this -> theRepository -> show( $Country );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CountryRequest $countryRequest
     * @param $Country
     * @return array|mixed
     */
    public function update( CountryRequest $countryRequest, $Country ) : array
    {
        return $this -> theRepository -> update( $countryRequest, $Country );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $Country
     * @return array|mixed
     */
    public function destroy( $Country ) : array
    {
        return $this -> theRepository -> destroy( $Country );
    }
}
